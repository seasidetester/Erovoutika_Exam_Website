<?php
include '../includes/connectdb.php';

$clUrID = $_POST['clUrID'];
$clUrUsername = $_POST['clUrUsername'];
$clUrFirstname = $_POST['clUrFirstname'];
$clUrLastname = $_POST['clUrLastname'];
$clUrLevel = $_POST['clUrLevel'];
$clUrcontact_num = $_POST['clUrcontact_num'];
$clUremail = $_POST['clUremail'];
$clUraddress = $_POST['clUraddress'];


$updatequery = " UPDATE tbusers  SET 
    clUrFirstname='$clUrFirstname',
    clUrLastname='$clUrLastname',
    clUrUsername='$clUrUsername', 
    clUrLevel='$clUrLevel',
    clUrcontact_num=$clUrcontact_num,
    clUremail='$clUremail',
    clUraddress='$clUraddress'
    WHERE clUrID =$clUrID; ";


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

?>
