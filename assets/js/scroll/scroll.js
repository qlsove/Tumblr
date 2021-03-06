$(document).ready(function()
{
  var inProgress = false;

  $(window).scroll(function()
  {
    if($(window).scrollTop() + $(window).height() >= $(document).height() && !inProgress) 
    {
      var startFrom = parseInt($("#start").val());

      $(".list").append("<img class='scrollload' src='/assets/images/cropper/loading.gif' width='50'>");
      $('.scrollload').show();

      $.ajax(
      { 
        url: "/ajax/scroll",
        method: 'POST',
        data: {"startFrom" : startFrom},
        beforeSend: function() {
        inProgress = true;}
      })



      .done(function(data)
      {
        $('.scrollload').hide();
        data = jQuery.parseJSON(data);

          if (data.length >0)
          { 
              $.each(data, function(index, data)
              { 
                  if (data.dest=='api')
                    $(".list").append('<div class="post"><br><img class="pict" src="' + data.url + '" width="' + data.width + '" ><br><div class="details"><div class="time">'+ data.timestamp +'</div><button class="addToGallery" onclick="addToGallery(this)" value="'+ data.id +'"  type="button">Додати в галерею</button><button class="cropbtn" onclick="precrop(this)"  value="'+ data.id +'">Редагувати</button><br><br></div>');
                  else 
                    $(".list").append('<div class="post"><br><img class="pict" src="' + data.url + '" width="' + data.width + '" ><br><div class="details"><div class="time">'+ data.timestamp +'</div><button class="addToGallery" onclick="addToGallery(this)" value="'+ data.id +'"  type="button">Додати в галерею</button><button class="original" onclick="uncrop(this)" value="'+ data.id +'"  type="button">Повернути оригінал</button></button><br></div>');
              });
            inProgress = false;
            startFrom = startFrom+3;
            $("#start").val(startFrom);
          }
      }); 
    }
  });
});