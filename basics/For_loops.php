<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
      <?php

      //For loops
      // execute commands  under a given range of numbers;
      for($num1 = 0; $num1 <= 30; $num1++){
        echo "hello world $num1 <br>";
      }

      
      // loop thru array list 
      // print the number at that particular index 
      $numbers = array(2,4,6,8,10,8,20);
      for($i=0; $i<count($numbers); $i++){
        echo "$numbers[$i] <br> "; 
      }

       ?>
    </body>
</html>