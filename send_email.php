<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Send email
  $to = 'jacobsimba01@gmail.com';
  $subject = 'New Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully.';
  } else {
    echo 'Error sending message.';
  }
}
?>
