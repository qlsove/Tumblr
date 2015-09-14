var x1, y1, x2, y2, crop = 'assets/images/';
var jcrop_api;

function uncrop(obj)
{
	$.ajax(
	{ 
		url: "/ajax/uncrop",
		method: 'POST',
		data: {"id" : obj.value}
	})

	.done(function(data)
	{
		data = jQuery.parseJSON(data);  
		$(obj).hide();
		$($(obj.closest(".post")).find('.pict')).attr('src', data.url);
		$($(obj.closest(".post")).find('.pict')).attr('width', data.width);
	}); 

}



jQuery(function($)
{

	$('#target').Jcrop(
	{
		onChange:   showCoords,
		onSelect:   showCoords
	},
	function()
	{
		jcrop_api = this;
	});


  $('#release').click(function(e)
  {
		release();
		$('#release').hide();
  });


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
				$('#release').hide();
			}
	}
});

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

jQuery(function($)
{
	$('#crop').click(function(e)
	{
		var img = $('#target').attr('src');
		var id = $.urlParam('id');
		var login = $.urlParam('user');
		$('jcrop-holder:first-child').css("display", "none");
		$('img.progress').css("display", "block");
		release();
		$('#release').hide();
		$.post("/ajax/crop", {'x1': x1, 'x2': x2, 'y1': y1, 'y2': y2, 'img': img, 'crop': crop, 'id':id, 'login':login}, 
			function(file)
			{
				$('.status').show();
			})

		.done(function( data ) 
		{
    	$('img.progress').css("display", "none");
  	});	
  }); 
});