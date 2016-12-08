<?php 
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
      </ul> 
  </div> <!-- /nav menu -->
  </div>

";
?>


<?php

echo "

<section class='strawberry'>
<h1>Mina projekt</h1>

<h3>School project</h3>

<hr>
<br />

<img class='goat' src='img/dengladageten.png'>
<img class='goat' src='img/project1.png'>

</section>

<section class='admin'>

<h1>Admin log in</h1>

<form method='post' action='login.php'>
  <input type='text' placeholder='Username' name='username' /><br />
  <input type='password' placeholder='Password' name='password' /><br />
  <input type='submit' name='submit' value='Log In' />

</form>

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
