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
        function __construct($mAuthor, $mTitle, $mpages){
          $this->author = $mAuthor;
          $this->title = $mTitle;
          $this->pages = $mpages;
        }
      }

      $book1 = new Book("Timz owen","The monk who sold his ferari",500);
      $book2 = new Book("Mark Manson","The subtle art of not giving a f*ck",350);

      //update values 
      $book1->author = "James Manson";  

      echo $book1->author;
      echo $book2->author;

      ?>
    </body>
</html>