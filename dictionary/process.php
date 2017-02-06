<?php include "inc/header.php"; ?>
<?php
	include 'connection.php';
?>
<div class="formContainer">
<?php
	error_reporting(0);
	$word      = $_POST['word'];
	$translate2 = $_POST['translate2'];
	$sentence  = $_POST['sentence'];

	$sql = "insert into worddb(word, translate2, sentence) values ('$word', '$translate2', '$sentence')";
	if(mysqli_query($conn,$sql)){
		echo '<a class="btn btn-success center-block" href="#" role="button">New record created successfully</a>';
	}
	else{
		echo "Error: " .$sql . "<br>". mysqli_error($conn);
	}
	mysqli_close($conn);

?>


</br>

<a class="btn btn-primary center-block" href="index.php" role="button">Insert new</a><br>
<a class="btn btn-primary center-block" href="list.php" role="button">See All Words</a>
</div>

<?php include "inc/footer.php"; ?>