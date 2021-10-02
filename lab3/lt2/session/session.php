<html>
<head>
<title>Session</title>
</head>
<body>
<?php
session_start();
$_SESSION["name"]="Anh Dung";
$_SESSION["Password"]="anhdung0403";
echo "set session";
?>
<br/>
<a href="getsession.php">Go to getsession</a>
</body>
</html>