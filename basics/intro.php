<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
      <?php
      class chef{
        function makeChicken(){
          echo "The chef makes chicken <br>";
        }

        function makeSalad(){
          echo "The chef made salad <br>";
        }

        function makeSpecialDish(){
          echo "Chef made ribs and bbq <br>";
        }

      }

      class ItalianChef extends chef{
        function makePasta(){
          echo "Italian chef can also make pasta";
        }

        // override a function inherited
        function makeSpecialDish()
        {
            echo "special food here is sea food";
        }
      }

      // instantiate the class
      $chef = new chef();
      $italianChef = new ItalianChef();

      // extends methods from Chef class
      echo $chef->makeSpecialDish();
      echo $italianChef->makeSpecialDish();

      ?>
    </body>
</html>