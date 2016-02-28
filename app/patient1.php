<?php
   $json = file_get_contents("php://input");
   $_POST = json_decode($json, true);
   $content = json_encode($_POST);
   file_put_contents('patient1.json', $content);
?>