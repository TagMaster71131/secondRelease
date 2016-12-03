<?php

if(isset($_POST['name'], $_POST['number'], $_POST['sender'], $_POST['receiver'], $_POST['body'])){


  // Validate name
  if(empty($_POST['name'])){
    $errors[] = "Please enter a name.";
  }else{
    $name = htmlentities($_POST['name']);
  }


  // Validate number
  if(empty($_POST['number'])){
    $errors[] = "Please enter a number.";
  }else{
    $number = htmlentities($_POST['number']);
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

echo "
<!DOCTYPE html>
<html>
<head>

  <title>Release 2</title>
  <meta charset='utf-8'/>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0'>
 
  <link href='css/main.css' media='screen, projection' rel='stylesheet' type='text/css'>

  <script src='https://code.jquery.com/jquery-3.1.1.min.js' integrity='sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=' crossorigin='anonymous'></script>
  <script type='text/javascript' src='script/main.js'></script>
  <script type='text/javascript' src='script/main1.js'></script>


</head>
<body>

<!-- container -->

<div class='container'>

  <span class='menu-trigger'></span>

  <!-- nav-menu -->
  <div class='nav-menu'>
      <ul class='clearfix'>
        <li><a href='index.php?page=home'>Home</a></li>
        <li><a href='index.php?page=portfolio'>Portfolio</a></li>
        <li><a href='index.php?page=about'>About</a></li>  
      </ul> 
  </div> <!-- /nav menu -->
  </div>
<section>

<!-- countdown -->
<br />
<div id='clockdiv'>
<h4>Dagar till Examen</h4>
            <div class='dayItem clockItem'></div>
            <div class='hourItem clockItem'></div>
        </div>

        </section>
";
if(empty($errors) === false){
      echo "<ul>";
      foreach($errors as $error){
          echo "<li>",$error,"</li>";
        }
        echo "</ul>";
        }else{
      if(isset($to, $name, $body, $email)){
          mail($to, $name, $body, "From: {$email}");
          echo "Meddelandt skickat!";
         }
       }
       echo "
        <form method='post' action=''>
      <label for='name'>Name: </label>
        <input type='text' id='name' name='name' /><br />

        <label for='number'>Telefonnummer: </label>
        <input type='text' id='number' name='number' /><br />

      <label for='sender'>Din eMail: </label>
        <input type='text' id='sender' name='sender' /><br />
      <label for='receiver'>Mottagarens eMail: </label>
        <input type='text' id='receiver' name='receiver' /><br />
      <label for='body'>Meddelande: </label>
        <textarea id='body' name='body' cols='100' rows='20'></textarea><br />
        <input type='submit' value='Send eMail' />
    </form>
    <!-- /Sending messages -->

        </section>
      </div>


</div>
     <script type='text/javascript' src='countdown.js'></script>
      <script type='text/javascript'>
        initializeClock('clockdiv', deadline);
    </script>
<!-- /countdown -->

</section>

 

<div class='site-footer'>
<footer>
 <ul class='share-buttons'>

  <li><a href='https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fspinnmaker&t=My%20Profile' title='Share on Facebook' target='_blank'><img alt='Share on Facebook' src='img/Facebook.png'></a></li>

  <li><a href='https://twitter.com/intent/tweet?source=https%3A%2F%2Fwww.facebook.com%2Fspinnmaker&text=My%20Profile:%20https%3A%2F%2Fwww.facebook.com%2Fspinnmaker&via=tagMaster71131' target='_blank' title='Tweet'><img alt='Tweet' src='img/Twitter.png'></a></li>

  <li><a href='http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fwww.facebook.com%2Fspinnmaker&title=My%20Profile&summary=&source=https%3A%2F%2Fwww.facebook.com%2Fspinnmaker' target='_blank' title='Share on LinkedIn'><img alt='Share on LinkedIn' src='img/LinkedIn.png'></a></li>

  </ul>
    </footer>

        </div>
      </div>
    
  </body>
</html>
";
 ?>