jQuery(document).ready(function($)
{
  $.facebox.settings.opacity = 0.9;
  $('a[rel*=facebox]').facebox(
  {
    loading_image : '/assets/images/facebox/loading.gif',
    close_image   : '/assets/images/facebox/closelabel.gif'
  });
});


$(document).bind('loading.facebox', function() 
{
  $(document).unbind('keydown.facebox');
  $('#facebox_overlay').unbind('click');
});


jQuery(function($)
{
  var length, current;
  $('#gallery').click(function(e)
  {
    $('.beforeload').show();
    $('.prevpict').hide();
    $('.nextpict').hide();
    $('tr .body .footer').hide();
    $(".body .modalcontent #info").css("background-color", "#B0E2FF");
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
      $('tr .body .footer').show();
      $(".body .modalcontent #info").css("background-color", "transparent");
      data = jQuery.parseJSON(data);
        if (data.length>0)
        { 
          $(".gallerylength").val(data.length); 
          $(".currentpicture").val(0); 
          $(".body .modalcontent #info .picture").append("<img id='currentslide' src='"+data[0].path+"' width='"+data[0].width+"'>")
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
      })

    })
  })
})



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









