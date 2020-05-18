<!Doctype html>
<html leng="ru">

<div id="header">    
	<?php require_once 'php/head.php'; ?>
	</div>
<script>
$('.History').History();
$('.гость').гость();
$('.Жалобы').Жалобы();
$('.Предложения').Предложения();
$('.music').music();
$('.Rules').Rules();
</script>

 <head>
  <title>Музыка – это воздух</title>
  <link rel="stylesheet" type="text/css" href="css/style-index.css">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 </head>
  <body background="images/фон.jpg"> 
 <header>
  <div id="container">	
  <!--Заглавие сайта--> 
<!---->
<!--Поисковик-->
  <div id="search">
   <?php require_once 'php/search.php'; ?>
  </div>
<!---->	   
<!--меню сайта-->
  <div id="вкладки">
   <?php require_once 'php/menu.php'; ?>  
  </div>   
<!---->	 
 </div>  
  </header>
<!--Конец меню сайта-->
<div id="img">
        <img src="images/уз2.png" width="10%" align="left">
		<img src="images/уз1.png" width="10%" align="right">
</div>
<!-- Область Контента -->

<div id="content">
<div id="img2">
        
</div>
  <div>
   <h2>О музыке как о прекрасном</h2>
  </div>
<br>
 <p><em><b>Музыка – это воздух.</b> Музыка это то, что мотивирует каждого 
из нас и в некоторых случаях заставляет двигаться вперёд на 
встречу к своей цели. Если вы хотите, чтобы всё было хорошо, 
то вам нужно слушать музыку. Она расслабляет, заставляет 
тело отдохнуть и не только тело, а душу. С музыкой вы можете 
лечь и раствориться. Музыка - это то, что может менять ваше 
настроение. Вы будете чувствовать себя так, как вы слушаете 
музыку. Очень важно слушать только ту музыку, которая вас 
радует.</em></p>
Подумайте о той музыке, которую вы хотите слышать в процессе 
своей работы.
</div>
<div>
<a href="music.php">
<div id="button">
<button type="button" class="btn btn-primary btn-lg">Выбрать музыку</button>
</div>
</a>
</div>
<!--конец области контента-->
<!-- ---------- footer start ------------- -->
<div id="footer"><?php require_once 'php/footer.php'; ?></div>
<!-- ---------- footer end --------------- -->
</div>
 <?php require_once 'routing.php'; ?>
</body>
</html>