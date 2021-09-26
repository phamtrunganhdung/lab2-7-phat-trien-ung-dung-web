<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab2 phần 1</title>
</head>
<body>
<?php
 echo "Hello world!"
 ?>
 <hr>
 <?php
$a = 1;
$b = 4;
$c = 3;
if($a > $b)
{
if($a > $c)
echo "Maximum num a = $a";
else
echo "Maximum num c = $c";
}
else
{
if($c > $b)
echo "Maximum num c = $c";
else
echo "Maximum num b = $b";
}
?>
<hr>
<?php
$a = 10;
$b = 20;
echo "a = $a"."<br>"."b = $b"."<br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "<b>After Swapping"."<br>"." a = $a"."<br>"."b = $b<b>";
?>
<hr>
<?php
$no = 5;
$value = 13.5;
$name = "Bipin R. Prajapati";
$var = true;
$myarray= array(110,45," Bipin",1.5,true);
echo gettype($no)."<br/>";
echo gettype($value)."<br/>";
echo gettype($name)."<br/>";
echo gettype($var)."<br/>";
echo gettype($myarray)."<br/>";
echo "<hr/>";
$data = array(1,1.5,null,"Bipin",new stdclass,true);
foreach($data as $value)
{
echo gettype($value)." | ";
}
?>
<hr>
<b>If the start is non-negative, the returned string will start at the start'th position
in string, start from 0.</b><br/><br/>
<?php
echo "Substring with positive start:".substr("abcdef",2)."<br/>";
?>
<br/>
<b>If the start is negative, the returned string will start at the start'th character in
string, from the end of the string.</b><br/><br/>
<?php
echo "Substring with negative start:".substr("abcdef",-2)."<br/>";
?>
<br/>
<b>If the start is less than or equal to start characters long, false will
return</b><br/><br/>
<?php
echo "start is <= string".substr("abcdef",7)."<br/><br/>";
echo "Finish";
?>
<hr>
<?php
$str1 = 'a';
$str2 = 'b';
echo strcmp($str1, $str2)."<br/>";
$str3 = 'b';
$str4 = 'b';
echo strcmp($str3, $str4)."<br/>";
$str5 = "Anil";
$str6 = "anil";
echo strcmp($str5, $str6)."<br/>";
?>
</body>
</html>