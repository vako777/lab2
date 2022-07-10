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
    if (isset($_GET['race'])) { 
        include 'connect.php';
        $race = $_GET['race'];
        $key = $race;
        $cursor = $collection2->find(array("race"=>array('$lte' => (int)$race)));
        $result = "Машины с пробегом ниже указанного <ol>";
        foreach($cursor as $document) {
            $mark = $document['mark'];
            $race = $document['race'];
            $result .= "<li>Автомобиль: $mark, пробег: $race</li>";
        }
        echo $result;
        echo "<script> localStorage.setItem('$key', '$result'); </script>";
    }
?>
</body>
</html>