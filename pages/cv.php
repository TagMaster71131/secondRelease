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

  <!-- JS -->
  <script src='http://code.jquery.com/jquery-latest.js'></script>
  <script src='script/countdown.js'></script>

  <script>
    
      $(document).ready(function(){
          $('#countdown').countdown({
              date: '24 November 2016 12:00:00',
              format: 'on'
          },

            function() {
                // callback function
            });
      });

  </script>


</head>
<body>

<!-- container -->
<div class='container'>

  <span class='menu-trigger'>MENY</span>

  <!-- nav-menu -->
  <div class='nav-menu'>
      <ul class='clearfix'>
        <li><a href='index.html'>Startsida</a></li>
        <li><a href='personligtbrev.html'>Profil</a></li>
        <li><a href='cv.html'>CV</a></li>  
      </ul> 
  </div> 
  <!-- /nav menu -->

<div class='back'>
<img src='img/sky.png'>
</div>
<section>
• MatHem i Sverige AB 

 <div id='showmenu'>Klicka här för mer info</div>
<div class='menu' style='display: none;'><ul><li>Work work work work work!</li></ul></div>
<hr>


 
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
