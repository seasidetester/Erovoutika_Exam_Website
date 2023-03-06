<?php

include '../includes/connectdb.php';

$clUrID = $_GET['clUrID'];

if(isset($_GET["clUrID"]) && !empty($_GET["clUrID"])){
  $clUrID = $_GET['clUrID'];

  $deletequery = " DELETE FROM tbuser WHERE clUrID ='$clUrID';";

  if(mysqli_query($connectdb, $deletequery)){
    echo "<script> 
    alert('Your account has been successfully deleted!'); 
    window.location = '../../index.php'; 
    </script>";  
    
  } else{
    echo "<script>
    alert('Failed to Delete.');  
    window.location = '../webadmin/admin_usertable.php';
    </script>"; 
    
}
}

?>