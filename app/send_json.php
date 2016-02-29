<?php
   $json = file_get_contents("php://input");
   $_POST = json_decode($json, true);
   $content = json_encode($_POST);

   $clean = array();
   $jsonclean = json_encode($clean);
   //file_put_contents('patient1.json', $jsonclean);
   
   //$fp = fopen('/patient_folder/sample_1231231234.json', 'w');
   //fclose($fp);
   
   //file_put_contents('patient1.json', $content);
   file_put_contents('patient_folder/sample2_5231231234.json', $content);
   echo "Get in PHP!";
   //$mobile = array('sam',"apple");
   //$jsonm = json_encode($mobile);
   //file_put_contents('patient1.json', $jsonm);
?>