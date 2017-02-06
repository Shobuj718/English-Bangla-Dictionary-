<?php 
	include "inc/header.php";
	include "connection.php";
?>
	<div class="formContainer">

		<h2 class="form-signin-heading">English to Bangali Translate</h2>
		<br>
		

		<form action="search_word.php" method="get">
			<input type="text" style="max-width: 282px; margin-top: 8px; margin-bottom: 12px;" name="search" placeholder="Search keyword..." required autofocus />
			<input class="btn btn-info" type="submit" name="submit" value="Search"/>
		</form>
		
		<br>
		
		<a class="btn btn-primary" href="index.php" role="button">Admin Panel</a>
		<a class="btn btn-primary" href="list.php" role="button">World List</a>
	
	</div>





<?php include "inc/footer.php"; ?>