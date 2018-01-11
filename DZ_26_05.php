<!--5. Функция, принимающая в качестве аргумента массив чисел вида: 1, 22, 5, 66, 3, 57 и возвращает массив по возрастанию: 1, 3, 5, 22, 57, 66 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №26. Задача 5</title>
</head>

<body>

    <?php 

	function arr($number) {
        sort($number);//сортировка по возрастанию элементов
	    print_r($number);
	}
arr(array(1,22,5,66,3,57));
    
    ?>
