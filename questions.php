<?php include 'database.php'; ?>
<?php session_start();?>
<!-- PHP logic-->
<?php
    // Set question Number
    $number = (int)$_GET['n']; // what we put in there // and  casting variable

// Get the question
// Prepare the query
    $query = "select * from `questions` where question_number = $number"; // importan those are keys above the tab
    // Get result
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__); // method run on query  or die is gonna cut the script
/// error and dthe line
  $question = $result->fetch_assoc(); // return the row assosiated with that query

// Get choices
    $query = "select * from `choices`  where  question_number = $number";

    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
   // $question = $result->fetch_assoc(); // return that row
    $query_total = "select * from `questions`";
    $result_rows = $mysqli->query($query_total) or die($mysqli->error.__LINE__);
    $total = $result_rows->num_rows;


?>
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
			<div class="current">Question <?php echo $question['question_number'];?> of <?php echo $total;?></div>
			<p class="question">
				<?php echo $question['text'];?> <!-- the variable of question table is called text-->
			</p>
			<form method="post" action="process.php">  <!-- ustawia mi zmienne do post-->
				<ul class="choices">
                    <?php while ($row = $choices->fetch_assoc()): ?>
                     <li><input name="choice" type="radio" value="<?php echo $row['id'];?>" /><?php echo $row['text'];?></li>
                    <?php endwhile;?>

				</ul>
				<input class="main_input" type="submit" value="Submit"/>
				<input  type="hidden" name="number" value="<?php echo $number;?>"/>
			</form>
		</div>  
		

	</div>
</body>
<!-- process.php has to only process data it dows not haa a view -->
<!-- database.php connectio with DB -->
</html>
