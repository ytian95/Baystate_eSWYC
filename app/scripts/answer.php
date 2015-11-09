<?php
$data = file_get_contents( "php://input" ); //$data is now the string '[1,2,3]';
$data = json_decode( $data );

$devAnswers = $_GET['devanswer'];
$sum = 0;
foreach ($devAnswers as $value) {
    $sum = $sum + $value
};
$myfile = fopen("newfile.txt", "w")
$txt = strval ($sum);
fwrite($myfile, $txt);
fclose($myfile);
http_response_code(404);
?>