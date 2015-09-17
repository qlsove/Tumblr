jQuery(function($)
{
  var length, current;

  $('#gallery').click(function(e)
  {
    $(".modalframe").append('<div id="info"><input type="hidden" class="currentpicture" value="0"><input type="hidden" class="gallerylength" value="0"><img  class="prevpict"  src="/assets/images/gallery/prev.png"><img  class="beforeload"  src="/assets/images/gallery/loading.gif" width="200" ><div class="picture"></div><img  class="close"  src="/assets/images/gallery/close.png"><img  class="nextpict"  src="/assets/images/gallery/next.png"></div>');
    $('.modalwindow').show();
    $('.modalframe').show();
    $('.beforeload').show();
    $('.prevpict').hide();
    $('.nextpict').hide();
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
      $('.beforeload').hide();
      $('.close').show();
      $("#info").css("background-color", "transparent");
      data = jQuery.parseJSON(data);
        if (data.length>0)
        { 
          $(".gallerylength").val(data.length); 
          $(".currentpicture").val(0); 
          $("#info .picture").append("<img id='currentslide' src='"+data[0].path+"' width='"+data[0].width+"'>")
            if (data.length>1)
              $('.nextpict').show();
        }

      $('.prevpict').click(function(e)
      {
        length = parseInt($(".gallerylength").val());
        current = parseInt($(".currentpicture").val());
          if (current-1>=0)
          {
            $(".picture #currentslide").attr('src', data[current-1].path);
            $(".currentpicture").val(current-1);
            current = parseInt($(".currentpicture").val());
              if(current>0)
              {
                $('.nextpict').show();
                $('.prevpict').show();
              }
              else
              {
                $('.nextpict').show();
                $('.prevpict').hide();
              }
          }
      })

      $('.nextpict').click(function(e)
      {
        length = parseInt($(".gallerylength").val());
        current = parseInt($(".currentpicture").val());
          if (current+1<=length-1)
          {
            $(".picture #currentslide").attr('src', data[current+1].path);
            $(".currentpicture").val(current+1);
            current = parseInt($(".currentpicture").val());
              if (current+1<length)
              {
                $('.nextpict').show();
                $('.prevpict').show();
              }
              else
              {
                $('.nextpict').hide();
                $('.prevpict').show();
              }
          }
      });


      $('.close').click(function(e)
      {
        $('#info').remove();
        $('.modalwindow').hide();
        $('.modalframe').hide();
      });

    })
  })
});



function addToGallery(obj)
{
  $.ajax(
  { 
  url: "/ajax/addToGallery",
  method: 'POST',
  data: {"id" : obj.value}
  })
  $(obj).hide();
}









