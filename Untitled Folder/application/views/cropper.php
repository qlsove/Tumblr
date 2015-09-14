<div class="photo">
	<img  id="target"src="<?=$photo["posts"][0]["photos"][0]["alt_sizes"][1]["url"]?>" width="500" >
	<div class="inline-labels">
	  <label><input type="hidden" size="4" id="x1" name="x1" /></label>
	  <label><input type="hidden" size="4" id="y1" name="y1" /></label>
	  <label><input type="hidden" size="4" id="x2" name="x2" /></label>
	  <label><input type="hidden" size="4" id="y2" name="y2" /></label>
	  <label><input type="hidden" size="4" id="w" name="w" /></label>
	  <label><input type="hidden" size="4" id="h" name="h" /></label>
	</div>
	<div class="status">
	Картинку успішно відредаговано!
	</div>
	<img  class="progress" src="/assets/images/cropper/loading.gif" width="200" >
	<button id="release">Скасувати</button> 
	<button id="crop">Зберегти</button>
</div>

