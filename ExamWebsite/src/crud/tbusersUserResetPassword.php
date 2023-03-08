<?php
include '../includes/connectdb.php';

$clUrID = $_SESSION['clUrID'];


$old_password = $new_password = $confirm_password = "";
$old_password_err = $new_password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // add new if statement for validating that the old password is correct (for josiah)


    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";   
        echo "<script> 
            alert('".$new_password_err."'); 
            </script>";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){

        $new_password_err = "Password must have atleast 6 characters.";
        //insert alert here 
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
        //insert alert here 
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
            //insert alert here 
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $updatequery = " UPDATE tbusers  SET 
            clUrPassword = ?

            WHERE clUrID = ? ";
        
        if($stmt = mysqli_prepare($connectdb, $updatequery)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = $new_password;
            $param_id = $_SESSION["clUrID"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: ../login_template.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}

//insert these statements above (the checking statements)


/*
insert this alert inside the if else 
if(mysqli_query($connectdb, $updatequery)){
    echo "<script> 
    alert('Services updated successfully!'); 
    window.location = '../webadmin/admin_usertable.php'; 
    </script>";  
    
} else{
    echo "<script>
    alert('Service update failed.');  
    window.location = '../webadmin/admin_usertable.php';
    </script>";  
  
}
*/
?>