<?php
   $json = file_get_contents("php://input");
   $_POST = json_decode($json, true);
   file_put_contents('patient1.json', $_POST);
?>