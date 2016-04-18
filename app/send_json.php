<?php
	// This php gets json data from the result-page and writes into the local patient folder
   $json = file_get_contents("php://input");
   $_POST = json_decode($json, true);

   $name = $_POST["name"];
   $phone = $_POST["phone"];

   $filename = "patient_folder/" . $name . "_" . $phone . ".json";
   echo $filename;
   
   $content = json_encode($_POST["info"]);

   $clean = array();
   $jsonclean = json_encode($clean);

   file_put_contents($filename, $content);

?>