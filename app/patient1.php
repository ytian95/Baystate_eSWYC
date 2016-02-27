<?php
   header('Content-type: application/json');
   $json = file_get_contents("php://input");
   echo "Hello World";
   echo $json;
   $_POST = json_decode($json, true);
   file_put_contents('patient1.json', $_POST);
?>