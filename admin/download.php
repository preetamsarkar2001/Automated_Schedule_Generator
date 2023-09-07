<?php
$file=$_GET['download'] .".pdf";
header("content-disposition: attachment; filename=" .urldecode($file));

$fb= fopen($file,"r");

while(!feof($fb)){
  echo fread($fb,8192);
  flush();
}
close($fb);


?>