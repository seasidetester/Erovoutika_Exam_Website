<?php
include '../includes/connectdb.php';

$clUrID = $_POST['clUrID'];
$clUrUsername = $_POST['clUrUsername'];
$clUrFirstname = $_POST['clUrFirstname'];
$clUrLastname = $_POST['clUrLastname'];
$clUrcontact_num = $_POST['clUrcontact_num'];
$clUremail = $_POST['clUremail'];
$clUraddress = $_POST['clUraddress'];


$updatequery = " UPDATE tbusers  SET 
    clUrFirstname='$clUrFirstname',
    clUrLastname='$clUrLastname',
    clUrUsername='$clUrUsername', 
    clUrcontact_num=$clUrcontact_num,
    clUremail='$clUremail',
    clUraddress='$clUraddress'
    WHERE clUrID =$clUrID; ";


if(mysqli_query($connectdb, $updatequery)){
    echo "<script> 
    alert('Services updated successfully!'); 
    window.location = '../webclient/Settings.php'; 
    </script>";  
    
} else{
    echo "<script>
    alert('Service update failed.');  
    window.location = '../webclient/Settings.php';
    </script>";  
  
}

?>
