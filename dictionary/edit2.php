<?php include "inc/header.php";  ?>
<?php include 'connection.php';  ?>
	<div class="formContainer">
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM worddb WHERE id=$id";


$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
    $uniqueID = $row["id"];
    $word = $row["word"];
    $translate2 = $row["translate2"];
    $sentence = $row["sentence"];

    
  }
} else {
  echo "0 results";
}


mysqli_close($conn);
?>



	<form class="form-signin" action="update2.php" method="post">
      <h2 class="form-signin-heading">Input the word</h2>
      <label for="inputEmail" class="sr-only">Word</label>
      <input type="text" id="word" name="word" class="form-control" placeholder="Enter Word" required autofocus>
      <label for="Translate2"   class="sr-only">Translate</label>
      <input type="text" id="translate2" name="translate2" class="form-control" placeholder="Enter Bangali Translate" required>
      <label for="Sentence" class="sr-only">Sentence</label>
      
      <textarea rows="4" cols="50"  id="sentence" name="sentence" class="form-control" placeholder="Enter Sentence" ></textarea>
    </br>
	<input type="hidden" name="id" id="id" value="0">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Update Word</button> </br>
    <a class="btn btn-success center-block" href="list.php" role="button">See All Words</a>
  </form>
		

		


</div>

<?php include "inc/footer.php";  ?>

<script>
  $(document).ready(function(){
     $id =  "<?php echo $id; ?>"; 
    $("#id").val( $id );  
    $word =  "<?php echo $word; ?>"; 
    $("#word").val( $word );

    $synonyms =  "<?php echo $translate2; ?>"; 
    $("#translate2").val( $synonyms );

    $sentence =  "<?php echo $sentence; ?>"; 
    $("#sentence").val( $sentence );
  });

</script>