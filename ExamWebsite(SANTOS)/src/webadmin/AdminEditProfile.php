<?php
include 'AdminProfile.php';
//include '../includes/connectdb.php';

if($_SESSION['admin_sid']==session_id()){
    $clUrID = $_SESSION['clUrID'];
    $clUrUsername = $_SESSION['clUrUsername'];

    // ------------ PROFILE
    if($_POST['profile'] == "true"){

        // Update admin Firstname
        if($_POST['adminFirstname'] != ""){
            $NewFirstname = $_POST['adminFirstname'];
            $result = mysqli_query($connectdb, "UPDATE tbusers SET clUrFirstname = '$NewFirstname' WHERE clUrID = $clUrID;");

            echo "<script> 
            alert('First name change successfully!'); 
            window.location = '../webadmin/AdminProfile.php';
            </script>"; 
        }

        // Update admin Lastname
        if($_POST['adminLastname'] != ""){
            $NewLastname = $_POST['adminLastname'];
            $result = mysqli_query($connectdb, "UPDATE tbusers SET clUrLastname = '$NewLastname' WHERE clUrID = $clUrID;");

            echo "<script> 
            alert('Last name change successfully!'); 
            window.location = '../webadmin/AdminProfile.php';
            </script>"; 
        }

        // Update admin username
        if($_POST['adminUN'] != ""){
            $NewUsername = $_POST['adminUN'];
            $result = mysqli_query($connectdb, "UPDATE tbusers SET clUrUsername = '$NewUsername' WHERE clUrID = $clUrID;");
        }

        // Update admin user photo
        // File upload path for image
        if($_FILES["file"]["name"]){
            $targetDir = "../images/user images/";
            $fileName = basename($_FILES["file"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

            // Allow certain file formats
            $allowTypes = array('jpg','png','jpeg');
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                $newfilename= $clUrID. "_" .str_replace(" ", "", basename($_FILES["file"]["name"]));
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetDir . $newfilename)){
                    // Insert image file name into database
                    $insert = $connectdb->query("UPDATE tbusers set clUrPhoto = '".$newfilename."' where clUrID = $clUrID");
                    if($insert){
                        echo "<script> 
                        alert('Photo has been uploaded successfully!'); 
                        window.location = '../webadmin/AdminProfile.php';
                        </script>"; 
                    }else{
                        echo "<script> 
                        alert('File upload failed, please try again.'); 
                        window.location = '../webadmin/AdminProfile.php';
                        </script>"; 
                    } 
                }else{
                    echo "<script> 
                        alert('Sorry, there was an error uploading your file.'); 
                        window.location = '../webadmin/AdminProfile.php';
                        </script>"; 
                }
            }else{
                echo "<script> 
                        alert('Sorry, only JPG, JPEG, & PNG, files are allowed to upload.'); 
                        window.location = '../webadmin/AdminProfile.php';
                    </script>"; 
            }
        }
    }

    // ------------ PASSWORD
    if($_POST['password'] == "true"){
        //Update Admin password
        $NewPassword = $_POST['newPassword'];
        $NewRePassword = $_POST['newRePassword'];

        if($NewPassword == $NewRePassword){
            $result = mysqli_query($connectdb, "UPDATE tbusers SET clUrPassword = '$NewPassword' WHERE clUrID = $clUrID;");
            echo '<script>alert("Your password has been updated successfully")</script>';
        }
        else{
            echo '<script>alert("Make sure your passwords match.")</script>';
        }
    }

    //-------------- DELETE
    if($_POST['delete'] == "true"){
        $result = mysqli_query($connectdb, "DELETE FROM tbusers WHERE clUrID = $clUrID;");
    }

}
else{
	if($_SESSION['client_sid']==session_id()){
		header("location:../includes/error.php");		
	}
	else{
		header("location:../login_template.php");
	}
}
?>

