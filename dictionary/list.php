<?php include "inc/header.php"; ?>
<?php
include 'connection.php';
?>

<div class="formContainer">
	<a class="btn btn-success pull-left center-block" href="index.php" role="button">Insert new</a>
	<a class="btn btn-info pull-right center-block" href="search.php" role="button">Search</a>
<br><br><br>
</div>

<?php 
	$sql = "select id, word, translate2, sentence from worddb";
	$result = $conn->query($sql);

	echo '<table class="table table-stripped">
			<tr>  
				<th>ID</th>
				<th>Word</th>
				<th>Translate</th>
				<th>Sentence</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		';
	if($result->num_rows > 0){
		//output data of each row
		$i = 0;
		while($row = $result->fetch_assoc()){
			$i++;

	echo "<tr>
			<td><strong>". $i. "<strong></td>
			<td><strong>". $row["word"]. "<strong></td>
			<td>". $row["translate2"]. "</td>
			<td>". $row["sentence"]. "</td>
			<td><a href='edit2.php?id=". $row["id"]. "'>Edit</td>
			<td><a href='delete.php?id=". $row["id"]. "' class='delete'>Delete</td>
			
		</tr>";
	   }
   }
   else{
   	echo "0 results";
   }
   echo '</table>';
   mysqli_close($conn);


?>


<?php include "inc/footer.php"; ?>