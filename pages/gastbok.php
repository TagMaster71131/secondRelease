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

  <script type='text/javascript' src='js/script.js'></script>

  <!-- JS -->
  <script src='http://code.jquery.com/jquery-latest.js'></script>
  <script src='script/countdown.js'></script>

	<style>
		
	.guestbook1 {

		border: 1px solid black;
		margin: 20px;
		padding: 10px;
		width: 450px;
		color: #000;
		background-color: #fff;
	}

	.guestbook2 {

		color: #fff;
		padding: 10px;
		margin: 10px;
	}

	h1 {

		float: left;
		color: #fff;
		margin: 10px;
	}
	</style>

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
	<br />
	<h1>Gästbok</h1>

	<br />
	<form class='guestbook2' method='post' action=''>	
	<br />
	<br />
	Namn:<br />
	<input type='text' name='sender' /><br />
	Telefonnummer:<br />
	<input type='text' name='phonenumber' /><br />
	Din mail:<br />
	<input type='text' name='email' /> <br />
	<br />
	Meddelande:	<br />
	<textarea name='message'></textarea>

	<input type='submit' value='Skicka inlägget' />
	</form>
";
?>
	<?php

	
		$db = mysqli_connect('100923-219357.mysql.binero.se', '219357_eo33438', 'jace2010', '219357-100923');

		if( isset($_POST['message']) 
			&& isset($_POST['sender']) ){

			$sender = $_POST['sender'];
			$message = $_POST['message'];
			$phonenumber = $_POST['phonenumber'];
			$email = $_POST['email'];

			$query = " 
			INSERT INTO guestbook 
			(date, sender, message, phonenumber, email)VALUES 
			(NOW(), '$sender', '$message', '$phonenumber', '$email')
			";

			mysqli_query($db, $query);

			echo "Skickat!";
		}

		
		$query = "
				SELECT * 
				FROM guestbook
				ORDER BY date DESC
		";
		$result = mysqli_query($db, $query);

		while( $row = mysqli_fetch_assoc($result) ){
			echo " <div class='guestbook1'>
						<p>{$row['date']}</p>
						<p>{$row['message']}</p>
						<p>/{$row['sender']}</p>
						<p>{$row['phonenumber']}</p>
						<p>{$row['email']}</p>
						
					</div> 
					";
			}

	?>

</body>
</html>