<?php  include 'connect.php';?>
<!DOCTYPE HTML>
<html>
<head>
    <title>lab2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function select1() {
            let date = document.getElementById("date").value;
            let result = localStorage.getItem(date);
            document.getElementById('res').innerHTML = result;
        }
        function select2(){
            let race = document.getElementById("race").value;
            let result = localStorage.getItem(race);
            document.getElementById('res').innerHTML = result;
        }
    </script> 
</head>
<body>
<h3>Ковалик Іван Васильович, КІУКІ-19-2, Варіант 6</h3>
<form method="get" action="1.php">
    <p>Полученный доход с проката по состоянию на выбранную дату
        <select name="date" id="date" onchange="select1()">
            <?php
                $date = $collection1->distinct("time_end");
                foreach ($date as $document) {
                    echo "<option>";
                    print gmdate("H:i:s Y-m-d", $document);
                    echo "</option>";
                }
            ?>
        </select>
    <button>Ок</button>
</form>

<form method="get" action="2.php">
    <p>Автомобили с пробегом меньше указанного 
        <select name="race" id="race" onchange="select2()">
            <?php
                $date = $collection2->distinct("race");
                foreach ($date as $document) {
                    echo "<option>";
                    print($document);
                    echo "</option>";
                }
            ?>
        </select>
    <button>Ок</button>
</form>

<form method="get" action="3.php">
    <p>Имеющиеся в данном пункте марки автомобилей
    <button>Ок</button> 
</form>
<div id="res"></div>
</body>
</html>