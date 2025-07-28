<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="get">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password">
        <input type="submit" value="Log in">
    </form> -->

    <!-- <form action="index.php" method="post">
        <label>x:</label><br>
        <input type="text" name="xvalue"><br>
        <label>y:</label><br>
        <input type="text" name="yvalue">
        <input type="submit" value="total">
    </form> -->

     <form action="index.php" method="post">
        <label>radius:</label><br>
        <input type="text" name="radius"><br>
        <input type="submit" value="calculate">
    </form>
</body>
</html>


<?php
//$name = "Shalitha";
//$lessonNo1 = 1;
//$wish = "Good Luck";
//$br = "braking";
// echo "hello world <br>";
// echo "Hello {$name} we are learning PHP No {$lessonNo1} <br>";
// echo "we'll wish you {$wish}";

//get and post----------------------------------------------------------------------------------------------------------

// echo "{$_GET["username"]} <br>";
// echo "{$_GET["password"]} <br>";

// $x = $_POST["xvalue"];
// $y = $_POST["yvalue"];
// $total = round($x+$y);

// floor(), ceil(), sqrt(), pow($x, $y), max(), min(), pi(), rand(1, 6);----------------------------------------------------

// $absolute = abs($x);
// echo "absolute of the x is: {$absolute} total is (rounded): {$total}";

// calculator functional project---------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------



function calculate() {
    //vars-------------------------------------------------
    $r = $_POST["radius"];
    $squire = 2;
    $cube = 3;
    $round_to = 2;
    // echo $radius;


    // calculations-----------------------------------
    $initial_circumference = 2 * pi() * $r;
    $initial_area = pi() * pow($r, $squire);
    $Initial_capacity = 3/4 * pi() * pow($r, $cube);


    // rounding------------------------------------------------
    $circumference = round($initial_circumference, $round_to);
    $area = round($initial_area, $round_to);
    $capacity = round($Initial_capacity, $round_to);

    //actions--------------------------------------------------------------
    echo "The circumference of the circle is: <b> {$circumference}</b> <br> 
           And the area of it is: <b> {$area}</b> <br> 
            Further more, the capacity is: <b> {$capacity} </b> ";
}

calculate();



?>