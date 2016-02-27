<?php
   $json = file_get_contents("php://input");
   $_POST = json_decode($json, true);

   $file = fopen('patient1.json','w+');
   fwrite($file, $_POST);
   fclose($file);  
?>