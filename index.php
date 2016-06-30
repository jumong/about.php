<?php
function get_title($title, $for_h1 = false){ // Функция вывода h1 и title заголовков, переменная for_h1 уже встроенна 
     if ($for_h1 === false)
         return "<title>".$title."</title>";
	     return "<h1>".$title."</h1>";
	 
}
$title = "Угадай число заданное компьютером от 1 до 10";

function game($a, $b){ //Функция: Алгоритм игры
     if ( count($_GET) > false ){ // Проверяем получено ли значение
         if($b > false){ // Проверка введеного значения на нулевое значение	     
		if ($b > $a){ // Условие проверяющее введенное значение пользователя больше ли оно задуманного числа или нет     
		   return '<p>Слишком много</p><p>Попробуй еще разочек</p>'; // если да то возвращаем сообщение "Много" и Просим повторить попытку
		}
	        elseif($b < $a){ // Проверяем значение пользователя, меньше ли оно задуманного числа или нет
		   return '<p>Слишком мало</p><p>Попробуй еще разочек</p>'; //если да то возвращаем сообщение "Мало"  и Просим повторить попытку
		}
		else{ // Если же значение пользователя равно загаданному числу то выводим следующее сообщение
	           echo '<p>Вы угадали</p>'; // Поставил echo вместо return изза того что по какойто причине exit не работает
		   exit;
	        }			 
         }
         else{ //Если введенное значение нулевое то возвращаем
	        return '<p>Пожалуйста введите число от 1 до 10</p>';
         }
     }
     else{ //если значение не получено, выводим сообщение
         return '<p>Введите и угадайте число, испытайте удачу!</p>';
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
	     <?= game(7, @$_GET['b'], 0)?>
             <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                 <input type="text" value="<?= @$_GET['b']/*вывод числа которое было введено ранее игроком*/ ?>" name="b"/><br /><br />
                 <input type="submit" value="Испытать удачу" />
             </form>
         </div>
     </body>
</html>
