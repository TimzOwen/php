<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
    <form action="intro.php" method="post">
        Which Town: <input type="text" name="town">
        <input type="submit">
    </form>
        <?php
        $towns = array("Nairobi" => 100000, "Nakuru" => 150000, "Kisumu" => 250000, "Baringo"=>85000);
        echo $towns[$_POST["town"]]; // return the town typed
       ?>
    </body>
</html>