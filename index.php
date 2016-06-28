<?php

function get_title($title, $for_h1 = false) // Функция вывода h1 и title заголовков, переменная for_h1 уже встроенна
{ 
if ($for_h1 === false)
return "<title>".$title."</title>";
return "<h1>".$title."</h1>";
}
$title = "Угадай число заданное компьютером от 1 до 10";

function game($a, $b){ //Алгоритм игры
     if ( count($_GET) > 0 ){ // Проверяем получено ли значение
	     if ($b > $a){ // Условие проверяющее введенное значение пользователя, больше задуманного числа или нет
		     return '<p>Много</p><p>Попробуй еще разочек</p>'; // если да то выводим сообщение "Много" и Просим повторить попытку
	     }
	     else if($b > false){ // Проверка введеного значения на нулевое значение
		     if($b < $a){ // Проверяем значение пользователя, меньше задуманного числа или нет
			     return '<p>Мало</p><p>Попробуй еще разочек</p>'; //если да то выводим сообщение "Мало"  и Просим повторить попытку
		     }
		     else{ // Если же значение пользователя равно загаданному числу то выводим следующее сообщение
			     echo '<p>Вы угадали</p>'; // Поставил echo вместо return изза того что по какойто причине exit не работает
				 exit;

		     }
	     }
		 else{ //Если введенное значение нулевое то
			 return '<p>Пожалуйста введите число от 1 до 10</p>';
		 }
     }
}
?>
<html>
     <head>
         <?= get_title($title) ?> <!-- Выводим <title> заголовок -->
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
         <style type="text/css">div{background-color:#03b5fd; padding:10px; width:600px; height:auto;margin:0px auto;text-align:center;}</style>
     </head>
	 
     <body>
         <div>
             <?= get_title($title, true) ?> <!-- Выводим h1 заголовок -->
			 <?= game(7, @$_GET['b'])?>
             <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                 <input type="text" name="b"/><br /><br />
                 <input type="submit" value="Испытать удачу" />

             </form>
         </div>

     </body>
</html>
