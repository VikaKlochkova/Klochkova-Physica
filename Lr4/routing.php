<?php // Получение id страницы с помощью метода GET и фильтрация данных 
$id = strtolower(strip_tags(trim($_GET['id'])));
//Проверка на содержимое переменной $id
 switch($id){ 
 case 'History': include 'History.php'; break;
  case 'гость': include 'гость.php'; break; 
  case 'Жалобы': include 'Жалобы.php'; break;
    case 'Предложения': include 'Предложения.php'; break;
      case 'music': include 'music.php'; break;
     case 'Rules': include 'Rules.php'; break;
  }
?>
