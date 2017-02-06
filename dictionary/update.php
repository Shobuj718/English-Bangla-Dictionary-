<?php include "inc/header.php" ?>
<?php include "connection.php"; ?>

<div class="formContainer">
	
<?php 
	$uniqueID  = $_POST['id'];
	$word      = $_POST['word'];
	$translate = $_POST['translate'];
	$sentence  = $_POST['sentence'];

	$sql = "UPDATE worddb SET

			word  = '$word', 
			
			sentence  = '$sentence'
			WHERE id='$uniqueID'
			";

	if(mysqli_query($conn,$sql)){
		echo '<a class="btn btn-success center-block" href="#" role="button">Updated successfully</a>';
	}
	else{
		echo "Error: ".$sql. "<br>".mysqli_error($conn);
	}
	mysqli_close($conn);

?>
<br>
<a class="btn btn-primary center-block" href="index.php" role="button">Insert new word</a>
<br>
<a class="btn btn-primary center-block" href="list.php" role="button">See all words</a>

</div>





<?php include "inc/header.php" ?>