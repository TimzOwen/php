<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
    <!-- store key value pair uses '=>' to assign values to key.
          Elments are accessed using 'keys' and not index -->
        <?php
        $towns = array("Nairobi" => 100000, "Nakuru" => 150000, "Kisumu" => 250000);
        echo $towns['Nairobi']; // returns Nairobi population
        $towns['Kisumu'] = 123000; // assigns new value to key Kisumu
        echo $towns['Kisumu'];
        echo count($towns); // returns total number of key elements in an array
       ?>
    </body>
</html>