<!DOCTYPE html>
<html>
    <head>
        <title>Charlie Ate Lunch</title>
        <link rel="stylesheet" type="text/css" href="assign3.css">
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type" title="style">
    </head>
    <body>
        <header>
            <div id="header"><h1>Charlie Ate Lunch?</h1></div>
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
        <?php
        function isBitten() {
            $t = rand(0,1);
            return $t;
        }

        $z = isBitten();
        if($z == "0"){
            echo "<h1>Charlie did not eat my lunch!</h1><br>";
        }else
            echo "<h1>Charlie ate my lunch!</h1><br>";

        ?>

    </body>
</html>