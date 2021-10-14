<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
 <?php
 include 'loger.php';
 include 'fileloger.php';
 include 'databaseloger.php';
 $logger = new FileLogger('./log.txt', 'w');
 $logger->log('PHP interfae is awesome');
 $loggers = [
 new FileLogger('./log.txt'),
 new DatabaseLogger()
 ];
 foreach ($loggers as $logger) {
 $logger->log('Log message');
 }
 ?>
</body>
</html>
