<?php include 'database.php'; ?> <!-- that should include database.php in this quiz.php file-->
<!DOCTYPE html>
<html>
<head>
	<title>QUIZ</title>
	<meta http-equiv="X_UA_Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	 <link rel="stylesheet" content = "text/css" href="quiz_style/style_quiz.css">
 	  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
 	  
</head>
<body>

	<div class="container cont">
		<section class="jumbotron row">
			<h1>LINUX QUIZ</h1>
			<h2>Test if you are smarter than the author</h2>
		</section>
		<div class="container main">
			<ul>
				<li><strong>Number of Questions: </strong>10</li>
				<li><strong>Type: </strong>Single Choice</li>
				<li><strong>Estimated Time: </strong>5 minutes</li>
			</ul>
			<a href="questions.php?n=1" class="start" style="color:#1FF142;">Start Quiz</a>
		</div>  <!-- Redirection to the specific question at the beginning in 1-->
		<div class="spacer">

		</div>
		<footer>
			<div class="container">
				<strong>Copyrights &copy; 2018 , Linux Quiz</strong>
			</div>

		</footer>
	</div>
</body>
</html>