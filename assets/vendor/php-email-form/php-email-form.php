<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'ghinarj12@gmail.com'; // Replace with your email address
  $subject = 'New Form Submission';
  $headers = "From: $email \r\n";
  $headers .= "Reply-To: $email \r\n";

  $body = "Name: $name \n\nEmail: $email \n\nMessage: $message";

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo 'Thank you for your message!';
  } else {
    echo 'Sorry, there was an error sending your message.';
  }
}
?>
