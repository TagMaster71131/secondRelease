<?php 
echo "
<!DOCTYPE html>
<html>
<head>

  <title>Ny Individuell</title>
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

  <span class='menu-trigger'>MENY</span>

  <!-- nav-menu -->
  <div class='nav-menu'>
      <ul class='clearfix'>
        <li><a href='index.html'>Startsida</a></li>
        <li><a href='personligtbrev.html'>Profil</a></li>
        <li><a href='cv.html'>CV</a></li>  
      </ul> 
  </div> <!-- /nav menu -->


<div class='back'>
<img src='img/sky.png'>
</div>
<section>
Hej Hallå! </br> Kul att just DU har hittat hit!
</br>
Studerar Front End Developer på KYH Stockholm 2016-2018.</br>
Bor på planeten jorden, världsdel Europa, land Sverige.
</br>
I enjoy long walks on the beach, cooking and cuddle down the sofa enjoying a romantic movie.
</br>
I am a endless romantiker.
</br>
Movies I can't live without:

<ul>
  <li>Stark Trek</li>
  <li>Transformers</li>
  <li>Lord of the Rings</li>
  <li>Ich bin eine Berliner</li>
</ul>
<br>
<br>

<!-- countdown -->
<br />
<div id='clockdiv'>
<h4>Dagar till Examen</h4>
            <div class='dayItem clockItem'></div>
            <div class='hourItem clockItem'></div>
        </div>
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