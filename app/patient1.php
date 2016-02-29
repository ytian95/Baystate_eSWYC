<?php
   $json = file_get_contents("php://input");
   $_POST = json_decode($json, ture);
   $content = json_encode($_POST);
   file_put_contents('patient1.json', $content);
   echo '{"success" : true"}';
   //$mobile = array('sam',"apple");
   //$jsonm = json_encode($mobile);
   //file_put_contents('patient1.json', $jsonm);
?>