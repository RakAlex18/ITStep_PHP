<!--6. Рекурсивную функцию, принимающую два целых числа ­ начальное значение и  конечное значение. Например, первый аргумент 10, второй ­ 35. Функция должна                      
вывести на список нечетных чисел от 10 до 35.  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №26. Задача 6</title>
</head>

<body>

    <?php 

	function fact($x,$y) {
		if (is_int($x) && is_int($y)) {//если $x и $y целые числа, то выполняем след.код
		  if ($x%2 != 0)//если $x является нечетным числом
		      {
              echo $x."<br>"; // выводим его на экран
               }
		  $x++; //увеличиваем на 1
            if($y >=$x){
                fact($x,$y); //если увеличенный $x меньше или равен $y, то запускаем опять функцию
		        }		
		}
		else {echo "Ошибка! Введите целые числа";
                }
    }
fact(10,35);
    
    ?>