<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
  
      <?php
      class Student{
        var $name;
        var $major;
        var $gpa;

        // constructor usually gets called before object creation
        function __construct($mName, $mMajor, $mGpa){
          $this->name = $mName;
          $this->major = $mMajor;
          $this->gpa = $mGpa;
        }

        // fucntion to check honors
        function hasHonors(){
          if($this->gpa >= 3.5){
            return "true";
          }return "false";
        }
      }

      // call the student class here
      $student1 = new Student("Timz owen","Computer Science",4.4);
      $student2 = new Student("Velda Kiara","Software Engineering",5);

      echo $student2-> hasHonors();

      ?>
    </body>
</html>