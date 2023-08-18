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
          $this->setRating($mRating);
        }

        // getters allows othe methods to get access to private member variables
        function getRating(){
          return $this ->rating;
        }

        // setter to allow external modification of variables
        function setRating($rating){
          if($rating=='G' || $rating=='PG' || $rating=='NR'){
            $this->rating = $rating;
          }else{
            $this->rating = 'NR';
          }
        }
      }

      $avengers = new Movie("Avengers","vsdsvsvsvs");

      // $avengers->setRating("PG");

      echo $avengers->getRating();


      ?>
    </body>
</html>