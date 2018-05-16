<!DOCTYPE html>
<html>
<head>

	<title></title>
	<meta http-equiv="X_UA_Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	 <link rel="stylesheet" content = "text/css" href="quiz_style/style_add.css">
 	  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>


</head>
<body>
	<div class="container cont">
		<section class="jumbotron row">
			<h1>LINUX QUIZ</h1>
			<h2>Test if you are smarter than the author</h2>
		</section>
		<div class="container main">
			<h2>Add the question</h2>
			<form method="post" action="add.php">
				<p>
					<label>Question Number</label>
					<input class= "input_add" type="number" name="question_number"/>
				</p>
				<p>
					<label>Question Content</label>
					<input class="qq" type="text" name="question_text"/>
				</p>
				<p>
					<label>Choice #1: </label>
					<input id="ch1" type="text" name="choice1"/>
				</p>
				<p>
					<label>Choice #2:</label>
					<input  type="text" name="choice2"/>
				</p>
				<p>
					<label>Choice #3:</label>
					<input  type="text" name="choice3"/>
				</p>
				<p>
					<label>Choice #4:</label>
					<input  type="text" name="choice4"/>
				</p>
				<p>
					<label>Correct Choice Number: </label>
					<input class="input_add" type="number" name="correct_choice"/>
				</p>
				<p>
					<input type="submit" name="submit" value="Submit">
				</p>

			</form>
		</div>  
		
		
	</div>
</body>
<!-- process.php has to only process data it dows not haa a view -->
<!-- database.php connectio with DB -->
</html>
