<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
      <!--assign values to the varibale on the other php files
       include must come after the varibales have been defined-->
      <?php
      $title = "The Monk Who sold is Ferarri";
      $author = "Timz Owen";
      $wordCount = 30000; 
      include "article_header.php";

      // print the varibales from the other files
      echo "$miles <br>";
      sayHello("Timz ");

      ?>
    </body>
</html>