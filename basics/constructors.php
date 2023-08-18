<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
  
      <?php
      class Book{
        var $author;
        var $title;
        var $pages;

        // constructor usually gets called before object creation
        function __construct(){
          echo "book created <br>";
        }
      }

      $book1 = new Book;
      $book1->author = "Mark Manson";
      $book1->title = "Subtle art of not Giving a F*ck";
      $book1->pages = 146;

      $book2 = new Book;
      $book2->author = "Mark Manson";
      $book2->title = "Subtle art of not Giving a F*ck";
      $book2->pages = 146;

      // echo "$book1->author <br>";
      // echo "$book1->title <br>";
      // echo $book1->pages;
      ?>
    </body>
</html>