<?php include "inc/header.php";  ?>
<?php include 'connection.php';  ?>
	<div class="formContainer">
	<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM worddb WHERE id=$id";

	$result = $conn->query($sql);
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){

			$uniqueID = $row["id"];
    		$word = $row["word"];
    		$translate2 = $row["translate2"];
    		$sentence = $row["sentence"];
?>

	<?php  
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $uniqueID  = $_POST["id"];
        $word      = $_POST['word'];
		$translate2 = $_POST['translate2'];
		$sentence  = $_POST['sentence'];

        $query = "UPDATE worddb
                        SET
                        word    = '$word',                       
                        sentence   = '$sentence'
                        WHERE id='$uniqueID'";

                if(mysqli_query($conn,$sql)){
		echo '<a class="btn btn-success center-block" href="#" role="button">Updated successfully</a>';
	}
	else{
		echo "Error: ".$sql. "<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
             }
            ?>

		<form class="form-signin" action="" method="post">

	<h2 class="form-signin-heading">Input the word</h2>
	<label for="inputEmail" class="sr-only">Word</label>
	<input type="text" id="word" name="word" class="form-control" value="<?php echo $row['word']; ?>" required autofocus >

	<label for="Translate" class="sr-only">Translate</label>
	<input type="text" id="translate2" name="translate2" class="form-control" value="<?php echo $row['translate2']; ?>" required autofocus>

	<label for="Sentence" class="sr-only">Sentence</label>
	<textarea rows="4" cols="50" id="sentence" name="sentence" class="form-control" >		
	</textarea>
	<br>

	<input type="hidden" name="id" id="id" value="0">
	<button class="btn btn-lg btn-info btn-block" type="submit">Update Word</button> </br>

	<a class="btn btn-success center-block" href="list.php" role="button">See All Words</a>

</form>
		

		<?php } } ?>
	<?php
	//else{
		//echo "Something is wrong...";
	//}
	//mysqli_close($conn);
?>

</div>

<?php include "inc/footer.php";  ?>

<script>
  $(document).ready(function(){
    

    $sentence =  "<?php echo $sentence; ?>"; 
    $("#sentence").val( $sentence );
  });

</script>