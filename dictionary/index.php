<?php include "inc/header.php"; ?>
<?php include "connection.php"; ?>
<?php //include //"process.php"; ?>


<form class="form-signin" action="process.php" method="post">
		<h2 class="form-signin-heading">English to Bangali Translate</h2>
		<label for="inputEmail" class="sr-only">Word</label>
		<input type="text" id="Word" name="word" class="form-control" placeholder="Enter word" required autofocus>
		<label for="Translate" class="sr-only">Translte</label>
		<input type="text" id="Translte" name="translate2" class="form-control" placeholder="Enter Bangali Translte" required>
		<label for="Sentence" class="sr-only">Sentence</label>
		<textarea rows="4" cols="50" id="Sentence" name="sentence" class="form-control" placeholder="Enter Sentence"></textarea>
		<br>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Save to DB</button><br>
		<a class="btn btn-success center-block" href="list.php" role="button">See All Words</a><br>
		<a class="btn btn-info center-block" href="search.php" role="button">Search Word</a>
	</form>

	<?php include "inc/footer.php";  ?>
