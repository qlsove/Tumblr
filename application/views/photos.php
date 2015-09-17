<div class="information"><img src="<?=$avatar?> "><br>
<a href="<?=$profile["blog"]["url"]?>"><?=$profile["blog"]["title"]?></a><br>
<button id="gallery" >Галерея</button>
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
        <button class="cropbtn" onclick="precrop(this)"  value="<?=$photo["id"]?>">Редагувати</button><br>
      </div>
    </div>
  <?php
	endforeach;
	?>
</div>

<div class="modalwindow">
  <div class="modalframe">
  </div>
</div>



