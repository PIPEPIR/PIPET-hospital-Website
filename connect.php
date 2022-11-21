<?php
$mysqli = new mysqli('localhost','root','','pet_hospital');
   if($mysqli->connect_errno){
      echo $mysqli->connect_errno.": ".$mysqli->connect_error;
   } #test
 ?>


