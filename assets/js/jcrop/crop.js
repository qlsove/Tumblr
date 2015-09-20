var x1, y1, x2, y2, crop = 'assets/images/';
var jcrop_api;

$.urlParam = function(name)
{
	var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
 	return results[1] || 0;
}


function release()
{
	jcrop_api.release();
	$('#crop').hide();
}


function showCoords(c)
{
	x1 = c.x; $('#x1').val(c.x);
	y1 = c.y; $('#y1').val(c.y);
	x2 = c.x2; $('#x2').val(c.x2);
	y2 = c.y2; $('#y2').val(c.y2);
	$('#w').val(c.w);
	$('#h').val(c.h);

		if(c.w > 0 && c.h > 0)
		{
			$('#release').show();
			$('#crop').show();
			$('.status').hide();
		}
		else
		{
			$('#crop').hide();
		}
}


function uncrop(obj)
{
	$(obj).closest(".post").append('<img  class="beforeload"  src="/assets/images/cropper/loading.gif" width="100">');
	$('.beforeload').show();
	
	$.ajax(
	{
		url: "/ajax/uncrop",
		method: 'POST',
		data: {"id" : obj.value}
	})

	.done(function(data)
	{
		data = jQuery.parseJSON(data);
		$(obj).closest(".post").find('.pict').attr('src', data.url);
		$(obj).closest(".post").find('.pict').attr('width', data.width);
		$(obj).closest(".post").find('.pict').attr('height', '');
		$(obj).closest(".post").find('.beforeload').remove();  
		$(obj).after('<button class="cropbtn" onclick="precrop(this)"  value="'+ obj.value +'">Редагувати</button>');
		$(obj).remove();
	}); 
}


function precrop(obj)
{
	id = obj.value;
	$(".modalframe").append('<div class="cropper"><img  class="beforeload"  src="/assets/images/cropper/loading.gif" width="200"></div>');
	$('.modalwindow').show();
	$('.modalframe').show();
	$('.beforeload').show();
	var login = $.urlParam('user');

	$.ajax(
	{ 
		url: "/ajax/precrop",
		method: 'POST',
		data: {'login':login, "id" : obj.value}
	})

	.done(function(data)
	{
		$('.beforeload').hide();
		data = jQuery.parseJSON(data);
		frameheight=data.height +30;
		$('.modalframe').attr('height', frameheight);
		
		$(".cropper").append('<img  id="target" src="'+data.url+'" width="'+data.width+'"><div class="inline-labels"><label><input type="hidden" id="x1" name="x1" /></label><label><input type="hidden" id="y1" name="y1" /></label><label><input type="hidden" id="x2" name="x2" /></label><label><input type="hidden" id="y2" name="y2" /></label><label><input type="hidden" id="w" name="w" /></label><label><input type="hidden" id="h" name="h" /></label></div><div class="status">Картинку успішно відредаговано!</div><img  class="progress" src="/assets/images/cropper/loading.gif" width="200" ><button id="release" onclick="cancel()">Скасувати</button> <button id="crop" onclick="cropthis()">Зберегти</button>');
		$('#crop').hide();

		$('#target').Jcrop(
		{
			onChange:   showCoords,
			onSelect:   showCoords
		},
		function()
		{
			jcrop_api = this;
		});
	}); 
};


function cancel()
{
	release();
	$('.cropper').remove();
	$('.modalwindow').hide();
	$('.modalframe').hide();
};


function cropthis()
{
	var img = $('#target').attr('src');
	var login = $.urlParam('user');
	$('jcrop-holder:first-child').css("display", "none");
	$('img.progress').css("display", "block");
	release();
	$('#release').hide();
	$('#crop').hide();

	$.ajax(
	{
		url: "/ajax/crop",
		method: 'POST',
		data: {'x1': x1, 'x2': x2, 'y1': y1, 'y2': y2, 'img': img, 'crop': crop, 'id':id, 'login':login}
	})

	.done(function(data) 
	{
		data = jQuery.parseJSON(data);

  	$('img.progress').css("display", "none");
  	$('.status').show();
  	path="/"+data.url;
  	$(".cropbtn[value="+id+"]").closest(".post").find('.pict').attr('src', path);
  	$(".cropbtn[value="+id+"]").closest(".post").find('.pict').attr('width', data.width);
  	$(".cropbtn[value="+id+"]").closest(".post").find('.pict').attr('height', data.height);
  		if (!($(".addToGallery[value="+id+"]").closest(".post").find('.original').length>0))
  		{
  			$(".cropbtn[value="+id+"]").remove();
  			$(".addToGallery[value="+id+"]").after('<button class="original" onclick="uncrop(this)"  value="'+id+'">Повернути оригінал</button>');
			}
  	$('.cropper').remove();
  	$('.modalwindow').hide();
		$('.modalframe').hide();

		$('#release').click(function(e)
	  {
			release();
			$('#release').hide();
			$('.cropper').remove();
			$('.modalwindow').hide();
			$('.modalframe').hide();
	  });
	});

};


