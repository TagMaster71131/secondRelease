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
    

  default:
    echo "
    <!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
  <title>Startsidan Release 2</title>

<!-- Hör ihop med menyn -->
  <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0'> 


<!-- kopplar ihop css dokumentet med index sidan -->
<link href='css/main.css' media='screen, projection' rel='stylesheet' type='text/css'> 


<!-- När sidan blir mindre, regleras texten --> 
<link href='https://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet'> 

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
    ";

       echo "

<section>
  
</section>
<br />

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