<!--7. Функция, получающая 1 параметр (строку) и возвращающая TRUE ­ если строка является палиндромом, FALSE ­ в противном случае.   -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №26. Задача 7</title>
</head>

<body>

    <?php 

	function palindrom($str) {
	$str2 = strrev($str);//strrev - переворачиваем строку задом наперед
        if($str2 == $str){ //сравниваем 2 строки
            echo "TRUE";
            return true;
        }
        else{
            echo "FALSE";
            return false;
        }
}
palindrom("wow");
    
    ?>
