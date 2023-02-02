


<?php
$from = "info@dmlearn.com";
$to = "sumitsinha808@gmail.com";
$subject = "Simple test for mail function";
$message = "This is a test to check if php mail function sends out the email";
$headers = "From:" . $from;
if (mail($to, $subject, $message, $headers)) {
   echo("
      Message successfully sent!
   ");
} else {
   echo("
      Message delivery failed...
   ");
}
?>


