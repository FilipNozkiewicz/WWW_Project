<?php include "database.php";?>
<?php session_start(); ?>  <!-- we need to start a session to proceed data-->
<?php
    // check to see if score is set
  //  $_SESSION['score'] = 0;
    if(!isset($_SESSION['score'])){
        $_SESSION['score'] = 0;
    }
    if ($_POST){ // if $_POST is set
        $number = $_POST['number'];
        $selected_choice = $_POST['choice'];
        $next = $number+1; // then j got next question numbers

        // Get total  questions
        $query = "select * from `questions`";
        // get result
        $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $total = $results->num_rows;


        // Get corrrect choice
        $query = "select * from `choices` where question_number = $number and is_correct = 1";
    }
    //echo $number.'<br>';
    //echo $selected_choice.'<br>';
    // Get result
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

    // get row
    $row = $result->fetch_assoc(); // get row
    // set current choice
    $current_choice = $row['id']; // row which is selected
    // Comparison
    if($current_choice == $selected_choice){
        // Answer is correct
        $_SESSION['score'] ++;
        // I can directly change the var from row
    }
    /// Final statement

    if($number == $total){
        // we are on the last page
        header("Location: final.php");
    }else{
        header("Location: questions.php?n=".$next);
    }
    
?>