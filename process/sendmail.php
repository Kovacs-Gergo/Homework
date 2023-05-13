<?php
$to = $_POST['email'];
$subject = $_POST['subject'];
$txt = $_POST['message'];
$headers = "From: kovacsgergo@mmovies.nhely.hu" . "\r\n";
mail($to,$subject,$txt,$headers);
?>