<div class="profile">
  <div class="ava">
    <div>
    <img src="<?=$avatar?> ">
    </div><br>
  </div>
  <div class="descr">Назва блогу: <?=$profile["blog"]["title"]?><br>
  Посилання на блог: <a href="<?=$profile["blog"]["url"]?>"><?=$profile["blog"]["url"]?></a><br>
  Опис: <?=$profile["blog"]["description"]?><br>
  Кількість блогів: <?=$profile["blog"]["posts"]?><br>
  <a href="/profile/photos?user=<?=$profile["blog"]["name"]?>">Фотографії користувача</a>
  </div>
</div>
<br><br>


