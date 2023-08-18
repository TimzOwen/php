<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    <form action="intro.php" method="get">
        Name:<input type="text" name="name"> 
        <br>
        Age: <input type="number" name="age">
        <input type="submit"> 
    </form>

        <?php
        echo $_GET["name"]; 
        ?>
    </body>
</html>