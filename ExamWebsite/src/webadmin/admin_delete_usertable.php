<?php
 //include 'admin_usertable.php';
 include '../includes/connectdb.php';
 
 $clUrID = $_GET['clUrID'];

 $result = mysqli_query($connectdb, "DELETE FROM tbusers WHERE clUrID = $clUrID;");
 
 if($result){
    echo '<script>alert("User deleted successfully");
    window.location = "admin_usertable.php";</script>';
 }
?>