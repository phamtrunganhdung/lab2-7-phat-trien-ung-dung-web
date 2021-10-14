<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php
include 'fruit.php';
class Strawberry extends Fruit {
    public function message() {
    echo "Am I a fruit or a berry? ";
    }
   }
   $strawberry = new Strawberry("Strawberry", "red");
   $strawberry->message();
   $strawberry->intro();
?>
</body>
</html>