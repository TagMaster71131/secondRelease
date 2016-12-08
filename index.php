<?php


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
    case 'subpage':
          ob_end_clean();
          include 'pages/subpage.php';
    break;
    case 'gastbok':
          ob_end_clean();
          include 'pages/gastbok.php';
    break;
    case 'admin':
          ob_end_clean();
          include 'pages/admin.php';
    break;
  default:
    echo "
    <!DOCTYPE html>
<html>
<head>

  <title>Release 2</title>
  <meta charset='utf-8'/>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0'>
  <link href='css/main.css' media='screen, projection' rel='stylesheet' type='text/css'>

  <script src='https://code.jquery.com/jquery-3.1.1.min.js' integrity='sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=' crossorigin='anonymous'></script>

  <script type='text/javascript' src='js/script.js'></script>

  <!-- JS -->
  <script src='http://code.jquery.com/jquery-latest.js'></script>
  <script src='script/countdown.js'></script>

  
</head>
<body>

<!-- container -->
<div class='container'>

  <span class='menu-trigger'></span>

   <!-- nav-menu -->
  <div class='nav-menu'>
      <ul>
        <li><a href='index.php?page=home'>Home</a></li>
        <li><a href='index.php?page=portfolio'>Portfolio</a></li>
        <li><a href='index.php?page=about'>About</a></li> 
        <li><a href='index.php?page=subpage'>Subpage</a></li> 
        <li><a href='index.php?page=gastbok'>Gästbok</a></li>
        <li><a href='index.php?page=admin'>Admin</a></li>
      </ul> 
  </div> <!-- /nav menu -->
  </div>


<section class='apple'>
<br />
<h1>Caroline Permansson - Studying Front End Developer</h1>
<br />
<br />

</section>

<br />
<br />

<section class='banana'>

<h2>Things in process..</h2>
<br />
<br />
<button id='show'>Visa</button>
<button id='hide'>Dölj</button>

<br />
<p>Om du klickar på 'Dölj', så försvinner jag.</p>

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
    break;
}

?>