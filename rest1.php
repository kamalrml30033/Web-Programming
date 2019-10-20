<!DOCTYPE html>
<html>
    <head>
        <title>Restaurant Prices</title>
        <link rel="stylesheet" type="text/css" href="assign3.css">
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type" title="style">
    </head>
    <body>
    <header>
        <div id="header"><h1>Restaurant Prices</h1></div>
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
    <table align="center">
    <tr>
        <td>
            <form method="post">
                <input type="submit" id="default" name="default" value="Default No Sort">
            </form>
        </td>
        <td>
            <form method="post">
                <input type="submit" id="price" name="price" value="Sort by Price">
            </form>
        </td>
        <td>
            <form method="post">
                <input type="submit" id="name" name="name" value="Sort by Name">
            </form>
        </td>
    </tr>
    </table>

    

    <?php
        
        $restaurants = array
        (
            array(
                "name" => "Chama Gaucha", 
                "price" => "40.50"
                ),
        );

        function setArray(&$restaurants){
            $restaurants = array
            (
                array(
                    "name" => "Chama Gaucha", 
                    "price" => "40.50"
                    ),
                array(
                    "name" => "Aviva by Kameel",
                    "price" => "15.00"
                    ),
                array(
                    "name" => "Bone's Restaurant", 
                    "price" => "65.00"
                    ),
                array(
                    "name" => "Umi Sushi Buckhead",
                    "price" => "40.50"
                    ),
                array(
                    "name" => "Fandagles",
                    "price" => "30.00"
                    ),
                array(
                    "name" => "Capital Grille",
                    "price" => "60.50"
                    ),
                array(
                    "name" => "Canoe",
                    "price" => "35.50"
                    ),
                array(
                    "name" => "One Flew South",
                    "price" => "21.00"
                    ),
                array(
                    "name" => "Fox Bros. BBQ",
                    "price" => "15.00"
                    ),
                array(
                    "name" => "South City Kitchen Midtown",
                    "price" => "29.00"
                    )
            );
        }

        setArray($restaurants);

        function printTable(&$restaurants)
        {
            echo "<table align=\"center\">";
            echo "<tr>";
            echo "<th>Restaurant Name</th>";
            echo "<th>Average Cost</th>";
            echo "</tr>";
            for ($row = 0; $row < sizeof($restaurants); $row++) {
                echo "<tr>";
                for ($col = 0; $col < 2; $col++) {
                    echo "<td>";
                    if($col == 0){
                        echo $restaurants[$row]["name"];
                    }else{
                        echo $restaurants[$row]["price"];
                    }
                    echo "</td>";
                } 
                echo "</tr>";
            } 
            echo "</table>"; 
        }

        function compPrice($a, $b) {
            if ($a['price'] == $b['price']) {
                return strcmp($a['name'], $b['name']);
            }
            return ($a["price"] < $b["price"]) ? -1 : 1;
        }

        function printDefault()
        {
            setArray($restaurants);
            printTable($restaurants);
        }

        function printByPrice()
        {
            setArray($restaurants);
            usort($restaurants, 'compPrice');
            printTable($restaurants);
        }

        function printByName()
        {
            setArray($restaurants);
            sort($restaurants);
            printTable($restaurants);
        }

        if(isset($_POST["default"])){
            printDefault();
        }elseif(isset($_POST["price"])){
            printByPrice();
        }elseif(isset($_POST["name"])){
            printByName();
        }else{
            printDefault();
        }
    ?>

    </body>
</html>