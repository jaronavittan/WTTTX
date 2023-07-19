<?php

if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $tarea = $_POST['tarea'];

  $mailTo = "hawk995@walla.com";
  $headers = "From: ".$email;
  $txt = "You have received an email from ".$fname."\n\n".$tarea;
  
  
  mail($mailTo, $lname, $txt, $headers);
  header("Location: contact.php?mailsend");
  
}





?>
