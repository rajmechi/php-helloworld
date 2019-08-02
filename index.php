<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
   print $_SERVER['HTTP_CLIENT_IP'];
   print $_SERVER['HTTP_X_FORWARDED_FOR'];
   print $_SERVER['REMOTE_ADDR'];
?>
 </body>
</html>


