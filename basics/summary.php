<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
         // hello world & // comments
         echo("Hello world php");
         echo "<p> This is new line</p>";
 
         // 2.0 varibale
         $charName ="Timz";
         $age = 30;
         echo "<p>Helo $charName how you doing</p>";
         echo "<p>You are $age years old</p>";
         $charName = "owen";
         echo "<p>You new name changed to $charName</p>";

         // 3.0 data types
         $phrase="This is a string"; // String
         $age = 40; // numbers
         $gpa = 30.5; // double
         $isAvailable = true; // boolean
         echo($gpa);
         echo($phrase);
         echo($age);

         // 4.0 Working with strings
         echo "learning from Scratch"; // print without storing
         $name = "Kenya si in East Africa";
         echo $name; // store and print string
         echo strtolower($name); //convert to lower
         echo strtoupper($name); // convert to upper case
         echo strlen($name); // find len of char
         $city = "Nairobi Kenya";
         echo $city[0]; //access first character  using index positions
         $city[0] = 'M'; // replae first character 
         echo $city; 
         echo str_replace("Nairobi","Eldoret", $city); // replace one phrase 

         $city = "Nairobi Kenya";
         echo substr($city, 8 ); // pint from index 8 onwards 
         echo substr($city, 9, 3); // grab first 3 from index 8 onwards

         // 5.0 Working with numbers 
         echo 50; // print numbers direct
         echo 50.4569; // floating numbers

         echo 5 + 8; // addition
         echo 8 / 2; // division
         echo 8 * 5; // multipliaction 
         echo 10 % 3; // modulous --> returns the remainder
         $num = 5;
         $num ++;
         echo $num; // incrase number
         $num --;
         echo $num; // decrease by 1
         $num += 25 ; // add to the number (*=, -=)
         echo $num;
         $num = $num + 5; // same thing but not recommended ;
         echo $num;
         $age = 50;
         echo abs($age); // get absolute value of a number
         echo pow(2,4); // raise to power
         echo sqrt(64); // square root of number
         echo max(5, 20); // check which is bigger 
         echo min(10 , 20); // check which is smaller
         echo round(3.2); //rounding off
         echo ceil(2.3); // rounding up irrespective of the number
         echo floor(2.8); // always rounding it down


         // 6.0 check on user input 

         // 7.0 check Caclculator sample

         // 8.0 madlib game

         // URL parameters; (& used to add new parameter)

         // GET vs POST
         // POST doesnt place the valus on the url of the browser , GET does.
         // same implementations but different work flow
         // POST is more secure

         // Arrays 

         // checkboxes
        
         // associative arrays

         // functions

         // if else statements 

         // if else comparisson 

         // Calculator 2 

         //switch statements

         // while loops

         // For loops 

         // comments and TODOs 
         /* multiline
          comments  using slash and asterisk. 
          here
          */

          // Including html 
          // Allows you to include another file inside php file
          // Html header and footer files are used in the @include file in php

          // Including PHP Files
          /**
           * article header files
           * You can create different php files and pass variable parametes in other files 
           */
          

           // Classes and Objects
           // Objects - instance of class

           // Constructors 
           // Constructors.php files

           // Constructor_parameter
           // 'this' keyword refers to the current object in the class
           // use --> constructor_params.php class

           // Object functions

           // Getters and Setters
           /**
            * private --> only code allowed to modify will change this.  
            * Visibility modifiers --> allows php to control access level and modification of attributes
            */

            // getters and setters validators.php

            // Inheritance
            // using 'extends' keyword to obtain all values and chars from the extended class
        ?>
    </body>
</html>