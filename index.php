<?php

if(isset($_POST['subject'], $_POST['sender'], $_POST['receiver'], $_POST['body'])){
  // Validate Subject
  if(empty($_POST['subject'])){
    $errors[] = "Please enter a subject.";
  }else{
    $subject = htmlentities($_POST['subject']);
  }
  // Validate Sender Email
  if(empty($_POST['sender'])){
    $errors[] = "Please enter your valid eMail address.";
  }else if(strlen($_POST['sender']) > 347){
    $errors[] = "Your eMail is too long. Please provide your valid eMail address.";
  }else if(filter_var($_POST['sender'], FILTER_VALIDATE_EMAIL) === false){
    $errors[] = "Please provide a valid eMail address";
  }else{
    $email =  "<".htmlentities($_POST['sender']).">";

  }
  // Validate Receiver Email
  if(empty($_POST['receiver'])){
    $errors[] = "Please enter a valid eMail address for the receiving contact.";
  }else if(strlen($_POST['receiver']) > 347){
    $errors[] = "The eMail you entered for the receiver is too long. Please provide a valid eMail address.";
  }else if(filter_var($_POST['receiver'], FILTER_VALIDATE_EMAIL) === false){
    $errors[] = "Please provide a valid eMail address for the receiving contact";
  }else{
    $to =  "<".htmlentities($_POST['receiver']).">";

  }
    // Validate The Message Body
    if(empty($_POST['body'])){
      $errors[] = "Please enter a message.";
    }else{
      $body = htmlentities($_POST['body']);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>Mail test</title>
</head>
  <body>
  <?php
    if(empty($errors) === false){
    ?>
    <ul>
      <?php
        foreach($errors as $error){
          echo "<li>",$error,"</li>";

        }
      ?>
    </ul> 
    <?php

    }else{
      if(isset($to, $subject, $body, $email)){
          mail($to, $subject, $body, "From: {$email}");
          echo "Message sent!";
         }
       }
    ?>
    <form method="post" action="">
      <label for="subject">Subject: </label>
        <input type="text" id="subject" name="subject" /><br />
      <label for="sender">Your eMail: </label>
        <input type="text" id="sender" name="sender" /><br />
      <label for="receiver">Receivers eMail: </label>
        <input type="text" id="receiver" name="receiver" /><br />
      <label for="body">Messege: </label>
        <textarea id="body" name="body" cols="100" rows="20"></textarea><br />
        <input type="submit" value="Send eMail" />
    </form>
</body>
</html>