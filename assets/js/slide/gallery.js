jQuery(function($)
{
  var length, current;

  $('#gallery').click(function(e)
  {
    $(".modalframe").append('<div id="info"><img  class="beforeload"  src="/assets/images/cropper/loading.gif" width="200"><div class="slider"><ul></ul></div><img  class="close"  src="/assets/images/gallery/close.png"></div>');
    $('.modalwindow').show();
    $('.modalframe').show();
    $('.beforeload').show();
    $("#info").css("background-color", "#B0E2FF");
    var login = $.urlParam('user');

    $.ajax(
    { 
      url: "/ajax/gallery",
      method: 'POST',
      data: {"login" : login}
    })

    .done(function(data)
    {
      $('.beforeload').remove();
      $('.close').show(); 
      $("#info").css("background-color", "transparent");
      data = jQuery.parseJSON(data);
        if (data.length>0)
        { 
           $.each(data, function(index, data)
              { 
                  if(data.height<500)
                  {
                    margin=(500-data.height)/2;
                    $("#info").find("ul").append('<li><img src="'+data.path+'="'+data.side+'"'+data.size+'" alt="" style="margin-top:' +margin+'px;"></li>');
                  }
                  else
                    $("#info").find("ul").append('<li><img src="'+data.path+'="'+data.side+'"'+data.size+'" alt=""></li>');
              });
        };


      $(".slider").each(function ()
      { 
      var obj = $(this);
      $(obj).append("<div class='nav' width=></div>");
      $(obj).find("li").each(function ()
      {
        $(obj).find(".nav").append("<span rel='"+$(this).index()+"'></span>");
        $(this).addClass("slider"+$(this).index());
      });
      sliderlength=data.length;
      elwidth=parseInt($(".nav").find("span").height());
      elmarg=parseInt($(".nav").find("span").css("margin-right"));
      navwidth=sliderlength*(elwidth+elmarg);
      $(".nav").css('width', navwidth);
      $(obj).find("span").first().addClass("on");
      });



      function slide (obj, slider)
      { 
        var ul = $(slider).find("ul"); 
        var el = $(slider).find("li.slider"+obj); 
        var step = $(el).width(); 
        $(ul).animate({marginLeft: "-"+step*obj}, 500); 
      }

      $(document).on("click", ".slider .nav span", function()
      { 
        var slider = $(this).closest(".slider"); 
        $(slider).find("span").removeClass("on"); 
        $(this).addClass("on");
        var obj = $(this).attr("rel");
        slide(obj, slider);
        return false;
      });

       $('.close').click(function(e)
      {
        $('#info').remove();
        $('.modalwindow').hide();
        $('.modalframe').hide();
      })

    })
  })
});



function addToGallery(obj)
{
  $(".addToGallery[value="+obj.value+"]").after('<img  class="beforeload"  src="/assets/images/gallery/loading.gif" width="100">');
  
  $.ajax(
  { 
    url: "/ajax/addToGallery",
    method: 'POST',
    data: {"id" : obj.value}
  })

  .done(function(data)
  {
    $(obj).closest(".post").find('.beforeload').remove();
  }); 

}



















