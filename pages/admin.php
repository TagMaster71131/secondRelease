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
	</style>

</head>
<body>
	<h1>Gästboks Admin</h1>

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



		$db = mysqli_connect('localhost', 'root', '', 'guestbook');


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