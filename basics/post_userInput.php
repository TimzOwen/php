<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    <form action="intro.php" method="post">
        Name:<input type="text" name="name"> 
        <br>
        Age: <input type="number" name="age">
        <input type="submit"> 
    </form>

        <?php
        echo $_POST["name"]; 
        ?>
        <br>
        <?php echo $_POST["age"];?>
    </body>
</html>