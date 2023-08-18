<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body></body>
        <?php

        // IF STATEMENTS - For decision making
        // If its false nothing gets printed
        $isMale = true;

        if($isMale){
            echo "Use Gents washRoom <br>";
        }

        // IF ELSE 
        // if false the else gets printed
        $isMale = false;

        if($isMale){
            echo "Use gents room <br>";
        }else{
            echo "use female Rooms <br>";
        }

             // IF ELSE <> AND operator (&&)
             $isMale = true;
             $isTall = true;
             if($isMale && $isTall){
                 echo "you are Tall Male <br>";
             }else{
                 echo "None of th above is true <br>";
             }
     
             // OR Operator
             $isMale = false;
             $isTall = true;
             if($isMale || $isTall){
                 echo "Any is true or Both are True <br>";
             }else{
                 echo "Everything is False <br> ";
             }
     
             // Else if 
             $isMale = true;
             $isEmployed = true;
             $ismarried = false;
             if($isMale && !$ismarried){
                 echo "Hey buddy get married first <br>";
             }elseif($isEmployed){
                 echo "You salary increased <br>";
             }else{
                 echo "we regreat you didnt qualify <br>";
             }

       ?>
    </body>
</html>