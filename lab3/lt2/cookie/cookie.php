<html>
<head>
<title>Examle of cookies. . !</title>
</head>
<body>
<?php
setcookie("name","Anh Dung",time()+3600,"/","",0);
setcookie("age","21",time()+3600,"/","",0);
echo "set cookies";
?>
<br/>
<a href="getcookie.php">Go to getcookie</a>
</body>
</html>
