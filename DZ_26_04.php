<!--4. Функция, принимающая два параметра ­ 2 целых числа. Если вводятся не 2 целых числа ­ то функция должна выводить ошибку на экран. Если пользователь вводит 2 целых числа ­ то ему должна отрисовываться таблица умножение размером со значения параметров, переданных функции. Например, если вызовем нашу функцию таким образом ​ tabl​ (4,3), то функция нарисует следующую таблицу   -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №26. Задача 4</title>
</head>

<body>

    <?php 

	function multiTable($num1, $num2) {
    if(is_int($num1)&&is_int($num2)) {//если $num1 и $num2 целые числа, то выполняем след.код
        echo "<table border = 1 bordercolor = black cellspacing = 0>";
	   for ($tr=1; $tr<=$num2; $tr++){ // счётчик $tr следит за количеством строк 
		   if($tr==1){
			   echo '<tr bgcolor = blue height = 50px>';}
		   else{
			   echo '<tr height = 50px>';
		   }
    for ($td=1; $td<=$num1; $td++){ // счётчик $td следит за количеством столбцов 
        if($td==1){
			echo '<td bgcolor = e5a239 width = 100px align = center>'.$tr*$td. '</td>';}
		   else{
			   echo '<td width = 100px align = center>'. $tr*$td .'</td>';
		   }
	 }
    echo '</tr>';
       }
	}
	else{//если $num1 и $num2 Не целые числа
	echo "Ошибка!!!Введите целые числа";
	}
}
multiTable(3,6);
    
?>
