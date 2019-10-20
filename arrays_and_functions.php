

<!DOCTYPE html>
<html>
    <head>
        <title>Arrays and FUnctions</title>
        <link rel="stylesheet" type="text/css" href="assign3.css">
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type" title="style">
    </head>
    <body>
        <header>
            <div id="header"><h1>Arrays and Functions</h1></div>
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
    echo "<h1>For loop</h1>";
    $month = array ('January', 'February', 'March', 'April',
    'May', 'June', 'July', 'August',
    'September', 'October', 'November', 'December');

    for ($x = 0; $x < sizeof($month); $x++) {
        echo "$month[$x]<br>";
    } 

    sort($month);
    echo "<br>";
    for ($x = 0; $x < sizeof($month); $x++) {
        echo "$month[$x]<br>";
    } 

    echo "<br><h1>Foreach loop</h1>";
    $month = array ('January', 'February', 'March', 'April',
    'May', 'June', 'July', 'August',
    'September', 'October', 'November', 'December');

    foreach ($month as $x) {
        echo "$x<br>";
    } 

    sort($month);
    echo "<br>";
    foreach ($month as $x) {
        echo "$x<br>";
    } 

    ?>

    </body>
</html>