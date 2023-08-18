<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
  
      <?php
      // Creating model/entity properties
      
      class Book{
        var $author;
        var $title;
        var $pages;
      }

      $book1 = new Book;
      $book1->author = "Mark Manson";
      $book1->title = "Subtle art of not Giving a F*ck";
      $book1->pages = 146;

      echo "$book1->author <br>";
      echo "$book1->title <br>";
      echo $book1->pages;
      ?>
    </body>
</html>