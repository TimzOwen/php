<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <!--step allows you to take decimal numbes as input type-->
        <form action="intro.php" method="post">

        Num 1 : <input type="number" step="0.1" name="num1"> <br>
        Ops: <input type="textbox"  name="ops"> <br>
        Num 2 : <input type="number" step="0.1" name="num2"> <br>

            <input type="submit"><br>
        </form>
        
        <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $ops = $_POST["ops"];

        if($ops=='+'){
            echo $num1 + $num2;
        }elseif($ops=='-'){
            echo $num1 - $num2;
        }elseif($ops=='*'){
            echo $num1 * $num2;
        }elseif($ops=='/'){
            echo $num1/$num2;
        }else{
            echo "invalid character";
        }

       ?>
    </body>
</html>