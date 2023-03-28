<?php
	// Establish Database Connection
    require_once "../includes/connectdb.php";
	
    echo "fdfd";
    $sql_query = "";

    $UserExam_data = $_POST['UserExam_data_ajax'];
    $UserAnswer_data = $_POST['UserAnswer_data_ajax'];

    $clUeID_value = $UserExam_data['clUeID'];
    $clUrID_value = $UserExam_data['clUrID'];
    $clExID_value = $UserExam_data['clExID'];
    
    $sql_query .= "INSERT INTO `tbuserexam` (
            `clUeID`, 
            `clUrID`, 
            `clExID`
        )
        VALUES (
            '$clUeID_value', 
            '$clUrID_value', 
            '$clExID_value'
        );
    ";

    for($question_count = 0; $question_count < count($UserAnswer_data); $question_count++) {
        $clUaQuestionID_value = $UserAnswer_data[$question_count]['clUaQuestionID'];
    
        if($UserAnswer_data[$question_count]['clQsType'] == 0) { // 0 = Fill in the Blanks
            $clUaAnswer = $UserAnswer_data[$question_count]['clUaAnswer'];
        }
        else if($UserAnswer_data[$question_count]['clQsType'] == 1) { // 1 = Hybrid Multiple Choice
            $clUaAnswer = implode(",",$UserAnswer_data[$question_count]['clUaAnswer']);
        }

        $sql_query .= "INSERT INTO `tbuseranswer` (
                `clUeID`, 
                `clUaQuestionID`, 
                `clUaAnswer`
            )
            VALUES (
                '$clUeID_value', 
                '$clUaQuestionID_value', 
                '$clUaAnswer'
            );
        ";
        
        /* Retrieve question's correct answer
        $sql = "SELECT clQsCorrectAnswer from tbquestion where clExID = $clExID_value and clQsID = $clUaQuestionID_value;";
        $sql = "SELECT clQsCorrectAnswer from tbquestion where clExID = $clExID_value and clQsID = $clUaQuestionID_value;";
        $result = $connectdb->query($sql);
        $row = $result->fetch_assoc();
        $correctAnswer = $row['clQsCorrectAnswer'];*/

        
        // Select the ID (clAsID) of the question's correct answer from tbquestion table
        $correctAns_sql = "SELECT clQsCorrectAnswer from tbquestion where clExID = $clExID_value and clQsID = $clUaQuestionID_value;";
        $res_correctAns_sql = $connectdb->query($correctAns_sql);
        $row = $res_correctAns_sql->fetch_assoc();
        $correctAnswerID = $row['clQsCorrectAnswer'];
        
        // The user's answer ID is already assigned to the variable $clUaAnswer
        $userAnswerID = $clUaAnswer;
        
        // Fetch the correct answer body from the tbquestion table
        $correctAns_sql = "SELECT clQsBody from tbquestion where clExID = $clExID_value and clQsID = $correctAnswerID;";
        $res_correctAns_sql = $connectdb->query($correctAns_sql);
        $row = $res_correctAns_sql->fetch_assoc();
        $correctAnswerBODY = $row['clQsBody'];
        /*
        // Fetch the user's answer body from the tbquestion table
        $userAns_sql = "SELECT clQsBody from tbquestion where clExID = $clExID_value and clQsID = $userAnswerID;";
        $res_userAns_sql = $connectdb->query($userAns_sql);
        $row = $res_userAns_sql->fetch_assoc();
        $userAnswerBODY = $row['clQsBody'];*/
        
        // To check user's answer with the correct answer
        if ($correctAnswerID == $userAnswerID){
            $UrScore++;
        }
        
        // Record user's score
        //$sql_query .= "UPDATE tbuserexamresult set clUrScore = $UrScore where clUrID = $clUrID_value and clExID = $clExID_value;";
        // Clear variables(Optional)
        unset($clUaQuestionID_value);
        unset($clUaAnswer);
        unset($correctAnswerBODY);
        unset($userAnswerBODY);
    }

    // To record user exam info into tbuserexamresult
    $sql_query .= "INSERT INTO `tbuserexamresult` (
            `clExID`, 
            `clUrID`,
            `clUrScore`
        )
        VALUES (
            '$clExID_value', 
            '$clUrID_value',
            '$UrScore'
        );
    ";
    
	if(!empty($sql_query)) {
        // Insert SQL Queries
        $update_sql_query = mysqli_multi_query($connectdb, $sql_query);
        
        if($update_sql_query){
                echo "Insertion to Database Successful";
            }
        else{
            echo "Insertion to Database Failed";
            echo mysqli_error($connectdb);
        }
        
        // Clear $sql_query variable(Optional)
        unset($sql_query);
    }
	
	// End Database Connection
	mysqli_close($connectdb);

    // Clear variables(Optional)
    unset($UserExam_data);
    unset($UserAnswer_data);

    unset($clUeID_value);
    unset($clUrID_value);
    unset($clExID_value);
    
    unset($connectdb);
?>
