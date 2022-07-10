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
    if (isset($_GET['date'])) {
        include 'connect.php';
        $date = $_GET['date'];
        $key = $date;
        $time_end = strtotime($date)+7200;
        $cursor = $collection1->find(array('time_end' => $time_end));
        $result = "Доход с проката: ";
        foreach($cursor as $document) {
            $price = $document['price'];
        }
        $result .= $price; 
        echo $result;
        echo "<script> localStorage.setItem('$key', '$result'); </script>";
    }
?>
</body>
</html>