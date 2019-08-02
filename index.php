<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
   print("HTTP_CLIENT_IP is ")
   print $_SERVER['HTTP_CLIENT_IP'];
   print(" HTTP_X_FORWARDED_FOR is ")
   print $_SERVER['HTTP_X_FORWARDED_FOR'];
   print(" REMOTE_ADDR is ")
   print $_SERVER['REMOTE_ADDR'];
?>
 </body>
</html>


