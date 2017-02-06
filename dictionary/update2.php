<?php include "inc/header.php";  ?>
<?php include 'connection.php';  ?>

<div class="formContainer">

<?php
include 'connection.php';

$uniqueID = $_POST['id'];
$word = $_POST['word'];
$translate2 = $_POST['translate2'];
$sentence = $_POST['sentence'];

$sql = "UPDATE worddb SET word ='$word', translate2 = '$translate2', sentence = '$sentence' WHERE id='$uniqueID'";

if (mysqli_query($conn, $sql)) {
    echo '<a class="btn btn-success center-block" href="#" role="button">Updated successfully</a>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</br>
<a class="btn btn-primary center-block" href="index.php" role="button">Insert New</a>
</br>
<a class="btn btn-info center-block" href="list.php" role="button">See All Words</a>
	</div> <!-- /container -->



<?php include "inc/footer.php";  ?>