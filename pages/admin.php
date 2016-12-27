<?php 
	session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<style>
		
	.guestbook1 {

		border: 1px solid;
		margin: 10px;
		padding: 10px;
		width: 450px;
	}

	 .cv {

	 	 border: 1px solid black;
	 	 width: 300px; 
	 	 height: 150px;
	 	 padding: 20px;

	 	}

	 	h1 {

	 		color: #fff;
	 		text-align: center;
	 	}

	 	form a {

	 		color: #fff;
	 		font-family: Tahoma;
	 		font-size: 15px;
	 	}

	 	form {

	 		text-align: center;

	 	}

	 	.guestbook1 {

	 		color: #fff;
	 		text-align: center;
	 	}

	 	.text-edit {
	box-sizing: border-box;
	margin: 30px 0 0;
	padding: 0 15px 15px;
	width: 70%;
	border: 2px solid white;
	background-color: #ccc;
	float: left;
}

.text-heading {
	text-align: left;
	font-size: 1.5em;
}

.text-heading2 {
	font-size: 1.2em;
}

.text-textarea {
	font-size: 1em;
	width: 70%;
	height: 60px;
}


	</style>
<meta charset='utf-8'/>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0'>
  <link href='css/main.css' media='screen, projection' rel='stylesheet' type='text/css'>
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

	<h1>Admin</h1>

	<?php 



		if(isset($_POST['password']) ){
			if($_POST['password'] == "jace2010"){
				$_SESSION['admin'] = TRUE;
			}
		}

		if( isset($_POST['logout']) ){
			$_SESSION['admin'] = FALSE;
		}

		//INLOGGAD ADMIN



	if(isset($_SESSION['admin']) && $_SESSION['admin'] == TRUE){
		echo "
		<form method='post' action=''>
			<input type='submit' value='Logga ut' name='logout'>
		</form>
	 ";

	 echo "
	 	<form method='get' action=''>
	 	<input type='text' name='search'>
	 	<input type='submit' value='Sök'>
	 	</form>

	 ";



		$db = mysqli_connect('100923-219357.mysql.binero.se', '219357_eo33438', 'jace2010', '219357-100923') or die(mysqli_error()); 

		//MySqli injection.
			$username = mysqli_real_escape_string($db, $_POST['admin']);
			$password = mysqli_real_escape_string($db, $_POST['password']);
			$sql_command = "select * from users where username = '" . $username; $sql_command .= "' AND password = '" . $password . "'";



			if( isset($_POST['id']) ){

				$id = $_POST['id'];

				$query = "
					DELETE FROM guestbook
					WHERE id = $id


				";

				mysqli_query($db, $query);
			}
			
				if(isset($_GET['search']) ){


				$search = $_GET['search'];

				$search_query = "
				WHERE message LIKE '%$search%'
				OR sender LIKE '%$search%'

				";


			}else{
				$search_query = "";
			}
		$query = "
				SELECT * 
				FROM guestbook
				$search_query
				ORDER BY date DESC
		";
		$result = mysqli_query($db, $query);

		while( $row = mysqli_fetch_assoc($result) ){
			echo " 
					<div class='guestbook1'>
						<p>{$row['date']}</p>
						<p>{$row['message']}</p>
						<p>/{$row['sender']}</p>
						<p>{$row['phonenumber']}</p>
						<p>{$row['email']}</p>
						<form method='post' action=''>
						<input type='hidden' name='id' value='{$row['id']}'>
						<input type='submit' value='Ta bort'>
						</form>
					</div> 
				";
			}
				//$query = "
						//SELECT * FROM 'cv' WHERE 1
						//INSERT INTO 'cv'('id', 'text') VALUES ([value-1],[value-2])
						//$search_query
						//";
						//$result = mysqli_query($db, $query);



						 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $db = mysqli_connect('100923-219357.mysql.binero.se', '219357_eo33438', 'jace2010', '219357-100923') or die(mysqli_error());
 //Selecting Database
 $db = mysqli_select_db($db, "cv");






						echo "
				<div class='text-edit'>
      <form class='edit' method='POST'>
        <h2 class='text-heading2'>Release 2</h2>
          <textarea class='text-textarea' name='headingtext1'>CV </textarea>
        <h2 class='text-heading2'>Text</h2>
        <textarea class='text-textarea' name='formtext1'>Studerar front end developer 2016-2018 i stockholm. Det handlar om viljestyrka för att orka...</textarea>
        <textarea class='text-textarea' name='formtext2'>lite text</textarea>
        <textarea class='text-textarea' name='formtext3'></textarea>
        

          <input type='hidden' name='id' value='1'><br />
          <button type='submit' name='update'>Spara</button>
      </form>
    </div>
			";
			

		   // SLUT PÅ INLOGGAD ADMIN
		} else {
			echo "
				<form method='post' action=''>
					<input type='password' name='password'>
					<input type='submit' value='Logga in'>
					<br />
					<br />
					<a href='index.php?page=home'>Tillbaka till Index sidan</a>
				</form>
";


		}
	
	 ?>



</body>
</html>