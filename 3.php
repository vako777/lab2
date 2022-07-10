<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    include 'connect.php';
    $cursor = $collection1->distinct("mark");
    $key = "3";
    $result = "Имеющиеся в данном пункте марки: <ol>";
    foreach ($cursor as $document) {
        $result .= "<li>Марка: $document </li>";
    }
    echo $result;
    echo "<script> localStorage.setItem('$key', '$result'); </script>";
?>
</body>
</html>