<div class="information"><img src="<?=$avatar?> "><br><br>
<a href="<?=$profile["blog"]["url"]?>"><?=$profile["blog"]["title"]?></a><br>
<a id="gallery" href="#info" rel="facebox">Галерея</a><br>
</div><br>

<div class="list">
  <input type="hidden" id="start" name="start" value="3">
  <?php
	foreach($photos as $photo):?>
    <div class="post">
			<img  class="pict"  src="<?=$photo["url"]?>" width="<?=$photo["width"]?>" ><br>
      <div class="details">
        <div class="time"><?=$photo['timestamp']?></div>
        <button class="addToGallery" onclick="addToGallery(this)"  value="<?=$photo["id"]?>">Додати в галерею</button>
          <?php
          if($photo["dest"]=='local'):
          ?>
        <button class="original" onclick="uncrop(this)"  value="<?=$photo["id"]?>">Повернути оригінал</button>
          <?php
          endif;
          ?>
        <a class="edit" href="/profile/cropper?user=<?=$photo["blog_name"]?>&id=<?=$photo["id"]?>" target="_blank">Обрізати</a><br>
      </div>
    </div>
  <?php
	endforeach;
	?>
</div>

<div id="info" style="display:none;">
  <input type="hidden" class="currentpicture" value="0">
  <input type="hidden" class="gallerylength" value="0">
  <img  class="prevpict"  src="/assets/images/gallery/prev.png">
  <img  class="beforeload"  src="/assets/images/facebox/loading.gif" width="200" >
  <div class="picture"></div>
  <img  class="nextpict"  src="/assets/images/gallery/next.png">
</div>



