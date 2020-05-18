<!DOCTYPE html>
<html>
 <head>
  <title>Музыка – это воздух</title>
  <link rel="stylesheet" type="text/css" href="css/style-Ж.css">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 </head>
  <body background="images/фон.jpg">  
  <div id="container">	
<!--Заглавие сайта-->
  <header>
	<div id="header">
	   <h3><strong><font color="white">Жалобы :(</font></strong></h3>  
<!---->
<!--меню сайта-->
<div>
      <ul>
<!-- Описание ссылок в меню и сами ссылки. -->
         <a href="index.php">
             <button type="button" class="btn btn-info btn-lg">
             Главное меню</button>
		 </a>
		 <a href="History.php">
             <button type="button" class="btn btn-warning btn-lg">
             История музыки</button>
		 </a>
		 <a href="Предложения.php">
             <button type="button" class="btn btn-warning btn-lg">
             Предложения</button>
		 </a>
		 <a href="Rules.php">
             <button type="button" class="btn btn-danger btn-lg">
             Правила</button>
		 </a>
		<a href="гость.php">
             <button type="button" class="btn btn-warning btn-lg">
             Сообщение</button>
		</a>
		  <a href="music.php">
             <button type="button" class="btn btn-success btn-lg">
             Выбрать музыку</button>
		 </a>	  
      </ul>		  
</div>

<!--Конец меню сайта-->
</header>
<!-- Область Контента -->
<div id="content">
<b>Только не ругайтесь сильно. Сайт ещё в разработке. А у админа не хватает фантазии(((</b>
<form>
<div class="form-group">
<label>Имя</label>
<input type="text" class="form-control"
placeholder="Введите имя "name="name">
</div>
<div class="form-group">
<label>EMAIL:</label>
<input type="text" class="form-control"
placeholder="Введите Email" name="email">
</div>
<div class="form-group">
<label>Сообщение</label>
<textarea name="comment" class="form-control" placeholder="Сообщение" name="text"></textarea>
</div>
<div class="form-group">
<input type="submit" class="btn btn-info"
value="Отправить" />
</div>
</form>
</div>
<!--конец области контента-->
<!--Подвал сайта-->
<div id="footer">
<h3>Связь с автором</h3>
Виктория Клочкова <br>
Номер телефона: <u> +79787083304 </u> <br>
Почта mail.ru: <u> viki-iki@mail.ru </u>
</div>
</div>
</div>
</body>
</html>