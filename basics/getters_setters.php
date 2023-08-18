<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
  
      <?php
      class Movie{
        public $title;  
        private $rating;  // to only be acessed within this class

        function __construct($mTitle, $mRating){
          $this->title = $mTitle;
          $this->rating = $mRating;
        }

        // getters allows othe methods to get access to private member variables
        function getRating(){
          return $this ->rating;
        }

        // setter to allow external modification of variables
        function setRating($rating){
          $this->rating = $rating;
        }
      }

      $avengers = new Movie("Avengers","PG-13");

      // getter
      echo $avengers->getRating();

      //setter
      $avengers->setRating("Modified");
      
      echo $avengers->getRating();

      ?>
    </body>
</html>