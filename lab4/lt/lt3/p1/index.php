<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
 <?php
 include 'interface.php';
 include 'cat.php';
 include 'dog.php';
 include 'mouse.php';
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);
foreach($animals as $animal) {
 $animal->makeSound();
}
 ?>
</body>
</html>