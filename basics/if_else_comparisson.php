<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body></body>
        <?php

        // Compare different information;

        function comparisonMax($num1, $num2){
            if($num1>$num2){
                echo "$num1 is greater than $num2";
            }else{
                echo "$num2 is greater than $num1";
            }
        }
        echo comparisonMax(15,10);

        // using return 
        function getMax($num1, $num2){
            if($num1>$num2){
               return $num1;
            }else{
                return $num2;
            }
        }
        echo getMax(40,8);

        // 3 parameter comparison
        function getMaxnumber($num1, $num2, $num3){
            if($num1>=$num2 && $num1 >=$num3){
               return $num1;
            }elseif($num2>=$num1 && $num2>=$num3){
                return $num2;
            }else{
                return $num3;
            }
        }
        echo getMaxnumber(33,50,50);

       ?>
    </body>
</html>