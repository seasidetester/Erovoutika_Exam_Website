<?php
	// Establish Database Connection
    require_once "../includes/connectdb.php";
	
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

        // Clear variables(Optional)
        unset($clUaQuestionID_value);
        unset($clUaAnswer);
    }
    
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
