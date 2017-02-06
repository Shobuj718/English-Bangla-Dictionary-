<?php
	include "inc/header.php";
	include "connection.php";
	//echo "this page is not implementing";

?>

<?php

	if(!isset($_GET['search'])  || $_GET['search'] == NULL){
		echo "This word does not exist this dictionary !";
		//header("Location: index.php");
	}
	else{
		$search = $_GET['search'];
		//header("Location: list.php");
	}

?>

<div class="formContainer">
	<div class="table table-striped">
	<?php
		$query = "SELECT * FROM worddb WHERE word LIKE '%$search%'";
		$result = $conn->query($query);

		if($result->num_rows > 0){
		//output data of each row
			while($row = $result->fetch_assoc()){
				?>
				<div panel-body>
					<div table table-striped >
						<tr>
							<td style="color: green;"><h2><?php echo $row["word"]; ?></h2></td>
							<td><h3><?php echo $row["translate2"]; ?></h3></td>
							<td><h4><?php echo $row["sentence"]; ?></h4></td>
						</tr>
					</div>
				</div>
				
	<?php } } else { ?>
	<?php 
		echo '<h3>"This word does not exist this dictionary !"<h3>';
		//echo '<br>';
		}
	?>
	<br>
		
		<a class="btn btn-info" href="search.php" role="button">New Search</a>
		<a class="btn btn-primary" href="list.php" role="button">All words</a>
		<a class="btn btn-success" href="list.php" role="button">Admin Panel</a>
		
</div>
</div>

<?php include "inc/footer.php"; ?>