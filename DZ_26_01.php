<!--1. Функция,  принимающая  массив  строк  и  выводящая  каждую строку  в  отдельном параграфе.-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №26. Задача 1</title>
</head>

<body>

    <?php 

    $newArr = ["Vasya", "Dusay", "Kolaya"];
    function arr($name) { 
      foreach($name as $nam){
          echo $nam."<br>";
      }
}
    arr($newArr);
    
 ?>

</body>

</html>
