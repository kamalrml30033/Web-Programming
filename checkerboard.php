<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 3 checkerboard</title>
        <link rel="stylesheet" type="text/css" href="assign3.css">
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type" title="style">
    </head>
    <body>
    <header>
            <div id="header"><h1>Checkerboard</h1></div>
        </header>
        <nav>
            <div id="links">
                <ul>
                    <li><a href="phpassignment.html">Home</a></li>
                    <li><a href="Charlie_ate_lunch.php">Charlie ate Lunch?</a></li>
                    <li><a href="arrays_and_functions.php">Arrays and functions</a></li>
                    <li><a href="checkerboard.php">Checkerboard</a></li>
                    <li><a href="rest1.php">Restaurant Prices</a></li>
                </ul>
            </div>
        </nav>
    <style>
        table {
            width: 300px;
            border: 1px solid black;
            border-collapse: collapse;
        }

        td {
            height: 35px;
            width: 35px;
            border: 1px solid black;
            padding: 1px;
            spacing: 1px;
        }
    </style>

    <?php

    function isEvenCell($row, $col) {
        if($row % 2 == 0){
            if($col % 2 == 0){
                echo "<td style=\"background-color: black;\"></td>";
            }
            else{
                echo "<td style=\"background-color: red;\"></td>";
            }
        }else{
            if($col % 2 == 0){
                echo "<td style=\"background-color: red;\"></td>";
            }
            else{
                echo "<td style=\"background-color: black;\"></td>";
            }
        }
    }

    echo "<br><table align=\"center\">";
    for ($row = 0; $row <= 7; $row++) {
        echo "<tr>";
        for ($col = 0; $col <= 7; $col++) {
            isEvenCell($row, $col);
        } 
        echo "</tr>";
    } 
    echo "</table>";


    ?>

    </body>
</html>