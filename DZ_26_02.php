<!--2. Функция, принимающая 2 параметра - массив чисел и строку, обозначающую арифметическое действие, 
которое нужно выполнить со всеми элементами массива. Функция должна выводить результат на экран. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №26. Задача 2</title>
</head>

<body>

    <?php 

    $newArr = [-150, 50, 1, 17, 2];
    function arr($number, $str) { 
      switch($str) {
		  case "+":
			$summa = 0;
			foreach ($number as $num) {
				$summa += $num;
			}
			echo "Cумма всех элементов равна:  ". $summa;
		  break;
		  case "-":
				$summa2 = array_shift($number);//вырезаем первый элемент массива
		foreach ($number as $num) {
				$summa2 -= $num;
			}
			echo "Разница всех элементов равна:  ".$summa2;
		  break;
		  case "*":
			$proiz = 1;
			foreach ($number as $num) {
				$proiz *= $num;
			}
			echo "Произведение всех элементов равно:  ".$proiz;
		  break;
		  case "/":
			$del = array_shift($number);//вырезаем первый элемент массива
			foreach ($number as $num) {
				if($num == 0){//проверяем в оставшемся массиве, есть ли элементы, равные 0
					$del = "На 0 делить нельзя!";
					break;//нашли первый 0 - прерываем цикл
				}
				else{
				$del = $del / $num;
			}
				}
			echo "Деление всех элементов дает результат, равный:  ".$del;
		  break;
		  default:
			echo "Введите знак арифметического действия";
	  }
  }
arr($newArr, "/");
    
?>

</body>

</html>
