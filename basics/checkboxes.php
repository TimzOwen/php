<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    <form action="intro.php" method="post">
        Oranges: <input type="checkbox" name="Fruits[]" value="oranges"><br>
        Apples: <input type="checkbox" name="Fruits[]" value="apples"><br>
        Pears: <input type="checkbox" name="Fruits[]" value="pears"><br>
        <input type="submit">
    </form>
        <?php
        $fruits = $_POST["Fruits"];
        echo $fruits[1]; // returns the second item on the check box
       ?>
    </body>
</html>