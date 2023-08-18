<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
      <?php
      // switch statements:
        $grade = 'F';
        switch($grade){
            case 'A':
                echo " Good work!!";
                break;
            case 'B':
                echo "Nice trail buddy!!";
                break;
            case 'D':
                echo "teribbly Failed buddy!!";
            default:
                echo "No such grade";
        }
       ?>
    </body>
</html>