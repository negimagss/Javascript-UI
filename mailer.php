<?php
$name = $_POST["name"];
$to = "shardul.negi21@gmail.com";
$subject = "[MyWebsite]" . $_POST["subject"];
$txt = $_POST["body"];
$headers = "From: Test Program for the same" . "\r\n";

mail($to,$subject,$txt,$headers);
?>
