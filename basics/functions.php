<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body></body>
        <?php
       
       // Define a function
       function sayHello(){
        echo "Hello function <br>";
       }

       //function parameters
       function sayHelloUser($name){
        echo "Hello $name <br>";
       }

       //function with multiple parameter
       function registration($name, $age){
        echo "first name is $name and years are: $age years old <br>";
       }
       //call the function 
       sayHello();
       sayHelloUser("Timz"); // function parameter

       // reuse function
       registration("Timz",50);
       registration("Ives",24);
       registration("Velda",26);


       // return statements . After return , the code stops executing the rest of the lines.
       function cubeNumber($num){
        return $num * $num * $num; // use return keyword.    
        }
        echo cubeNumber(3); 
       ?>
    </body>
</html>