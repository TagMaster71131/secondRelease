<?php 
echo "

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
  <title>HangMan</title>
  <link rel='stylesheet' type='text/css' href='css/style.css'>
  <link rel='stylesheet' type='text/css' href='css/main.css'>
<script src='https://code.jquery.com/jquery-3.1.1.min.js'
    integrity='sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8='
    crossorigin='anonymous'>
</script>

<script type='text/javascript' src='js/script2.js'></script>
<script type='text/javascript' src='js/hangman.js'></script>
 
</head>
<body>
<!-- container -->
<header>
    Caroline Permansson - Mitt individuella projekt
  </header>
    <nav>
      <ul class='showing'>
        <li><a href='index.php?page=home'>Home</a></li>
            <li><a href='index.php?page=portfolio'>Portfolio</a></li>
            <li><a href='index.php?page=about'>CV</a></li> 
            
            <li><a href='index.php?page=hangman'>Hangman</a></li> 
            <li><a href='index.php?page=gastbok'>Gästbok</a></li>
            <li><a href='index.php?page=admin'>Admin</a></li>
      </ul>
      <div class='handle'>Menu</div>
      
    </nav>

<br />

</section>

  <div class='hangman'>
   <h1>Hangman</h1>
    <p>Använd alfabetet nedanför för att gissa ordet, eller klicka
    på hint knappen för att få en ledtråd.</p>
    

<div class='wrapper'>
    <div id='buttons'>
    </div>  
    <p id='catagoryName'></p>
    <div id='hold'>
    </div>
    <p id='mylives'></p>
    <p id='clue'>Ledtråd -</p>  
     <canvas id='stickman'>This Text will show if the Browser does NOT support HTML5 Canvas tag</canvas>
    <div class='container'>
      <button id='hint'>En Hint</button>
      <button id='reset'>Spela igen</button>
    </div>
</div>
</div>


</body>
</html>

";
?>


<?php
