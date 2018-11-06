<?php
  $email_to = "alexei.vasko@outlook.com";
  $email_subject = "Hello! Someone contacted me.";
  $from = 'Received via github/business-card';

  $name = $_POST['name']; // required
  $email = $_POST['email']; // required
  $message = $_POST['message']; // required

  $body = "From: $name\n E-Mail: $email\n Message:\n $message";

  if ($_POST['submit']) {
    if ($name != '' && $email != '') {
      if (mail ($email_to, $email_subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
      } else {
        echo '<p>Something went wrong, go back and try again!</p>';
      }
    }
    echo '<p>You need to fill in all required fields</p>'
  }
?>
