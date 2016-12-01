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

$p = $_GET['page'];

switch ($p) {
    case 'portfolio':
          ob_end_clean();
          include 'pages/cv.php';
    break;
    case 'about':
          ob_end_clean();
          include 'pages/about.php';
    break;
    

  default:
    echo "
    <!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
  <title>Mail test</title>

  <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0'> <!-- Hör ihop med menyn -->
  <link href='css/main.css' media='screen, projection' rel='stylesheet' type='text/css'> <!-- kopplar ihop css dokumentet med index sidan -->
  <link href='https://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet'> <!-- När sidan blir mindre, regleras texten -->
  <script src='https://code.jquery.com/jquery-3.1.1.min.js' integrity='sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=' crossorigin='anonymous'></script> <!-- Denna kopplar ihop jquery i main.js filen så att menyn funkar -->
  <script type='text/javascript' src='script/main.js'></script><!-- Kopplar ihop JavaScript med önskad gadget på index sidan, för tillfället har jag inte skapat något, men de kommer.. -->


</head>
  <body>

<!-- container -->
<div class='container'>

  <span class='menu-trigger'>MENY</span>

  <!-- nav-menu -->
  <div class='nav-menu'>
      <ul class='clearfix'>
        <li><a href='index.php?page=home'>Home</a></li>
        <li><a href='index.php?page=portfolio'>Portfolio</a></li>
        <li><a href='index.php?page=about'>About</a></li>  
      </ul> 
  </div> <!-- /nav menu -->
  </div>
    ";

    if(empty($errors) === false){
      echo "<ul>";
      foreach($errors as $error){
          echo "<li>",$error,"</li>";
        }
        echo "</ul>";
        }else{
      if(isset($to, $subject, $body, $email)){
          mail($to, $subject, $body, "From: {$email}");
          echo "Message sent!";
         }
       }
       echo "
        <form method='post' action='>
      <label for='subject'>Subject: </label>
        <input type='text' id='subject' name='subject' /><br />
      <label for='sender'>Your eMail: </label>
        <input type='text' id='sender' name='sender' /><br />
      <label for='receiver'>Receivers eMail: </label>
        <input type='text' id='receiver' name='receiver' /><br />
      <label for='body'>Messege: </label>
        <textarea id='body' name='body' cols='100' rows='20'></textarea><br />
        <input type='submit' value='Send eMail' />
    </form>
    <!-- /Sending messages -->

<div class='site-footer'> <!-- footer med länkar att dela, finns längst ner på index sidan, samt på cv.html och personligtbrev.html. -->
<footer>

 <ul class='share-buttons'>

  <li><a href='https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fspinnmaker&t=My%20Profile' title='Share on Facebook' target='_blank'><img alt='Share on Facebook' src='img/Facebook.png'></a></li>

  <li><a href='https://twitter.com/intent/tweet?source=https%3A%2F%2Fwww.facebook.com%2Fspinnmaker&text=My%20Profile:%20https%3A%2F%2Fwww.facebook.com%2Fspinnmaker&via=tagMaster71131' target='_blank' title='Tweet'><img alt='Tweet' src='img/Twitter.png'></a></li>

  <li><a href='http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fwww.facebook.com%2Fspinnmaker&title=My%20Profile&summary=&source=https%3A%2F%2Fwww.facebook.com%2Fspinnmaker' target='_blank' title='Share on LinkedIn'><img alt='Share on LinkedIn' src='img/LinkedIn.png'></a></li>

</ul>
</footer>
</div>

</body>
</html>
       ";
    break;
}

?>