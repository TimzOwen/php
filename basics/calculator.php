<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    <form action="intro.php" method="get">
        num 1:<input type="number" name="num1"> 
        <br>
        num 2:<input type="number" name="num2"> 
        <br>
        <input type="submit"> 
    </form>
        <?php 
        $num1 =  $_GET["num1"];
        $num2 = $_GET["num2"];
        $sum = $num1 + $num2;
        echo $sum;
        // short hand way  echo $_GET["num1"] + $_GET["num2"];
        ?>
    </body>
</html>