<?php
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $email_form = 'Styles Typing Site';
  $email_subject='New Message From Styles Contact'
  $email_body= "Name: $name.\n".
               "Email: $email.\n". 
               "Subject: $subject.\n"
               "Message: $message.\n";
          
 $to ="prasaddatir083@gmail.com";
 $headers = "From: $email_from \r\n";
 $headers = "Reply-To: $email_from \r\n";    
 
 mail($to,$email_subject,$email_body,$headers);

 header("index.html");
  



?>
