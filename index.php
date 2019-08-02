<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
   foreach ($_SERVER as $key => $value) {
    if (strpos($key, 'HTTP_') === 0) {
        $chunks = explode('_', $key);
        $header = '';
        for ($i = 1; $y = sizeof($chunks) - 1, $i < $y; $i++) {
            $header .= ucfirst(strtolower($chunks[$i])).'-';
        }
        $header .= ucfirst(strtolower($chunks[$i])).': '.$value;
        echo $header."\n";
        }
     }
   $body = file_get_contents('php://input');
   if ($body != '') {
     #print("\n$body\n\n");
   }
   print "<br>HTTP_X_FORWARDED_FOR is " . $_SERVER['HTTP_X_FORWARDED_FOR'];
   print "<br> HTTP_X_FORWARDED_HOST is " . $_SERVER['HTTP_X_FORWARDED_HOST'];
   print "<br>HTTP_X_FORWARDED_SERVER is " . $_SERVER['HTTP_X_FORWARDED_SERVER'];
   print "<br>SERVER_NAME is " . $_SERVER['SERVER_NAME'];

?>
 </body>
</html>


