<?php include "inc/header.php"; ?>
<?php include "connection.php"; ?>

<div class="formContainer">
	
<?php
	$id = $_GET['id'];
	$sql = "DELETE FROM worddb WHERE id=$id";

	if(mysqli_query($conn, $sql)){
		echo "<p class='btn btn-danger center-block' style='padding:8px'>Record deleted successfully</p>";
		echo '<br>';
	}
	else{
		echo "<p class='bg-danger'>Error deleting record</p>";
	}
?>

</div>

<div class="formContainer">
	<a href="index.php" class="btn btn-success center-block">Insert new word</a></br>
	<a href="list.php" class="btn btn-success center-block">See all word</a></br>
</div>



<?php include "inc/footer.php"; ?>