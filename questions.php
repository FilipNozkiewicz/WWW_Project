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
 	 <link rel="stylesheet" content = "text/css" href="quiz_style/style_question.css">
 	  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

</head>
<body>
	<div class="container cont">
		<section class="jumbotron row">
			<h1>LINUX QUIZ</h1>
			<h2>Test if you are smarter than the author</h2>
		</section>
		<div class="container main">
			<div class="current">Question 1 of 10</div>
			<p class="question">
				What is the most popular linux shell
			</p>
			<form method="post" action="process.php">
				<ul class="choices">
					<li><input name="choice" type="radio" value="1" /> CCP</li>
					<li><input name="choice" type="radio" value="1" /> SSH</li>
					<li><input name="choice" type="radio" value="1" /> PowerShell</li>
					<li><input name="choice" type="radio" value="1" /> bash</li>
				</ul>
				<input class="main_input" type="submit" value="Submit"/>
			</form>
		</div>  
		
		
	</div>
</body>
<!-- process.php has to only process data it dows not haa a view -->
<!-- database.php connectio with DB -->
</html>
