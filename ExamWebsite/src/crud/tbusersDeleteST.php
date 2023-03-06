<?php
include '../includes/connectdb.php';

$clUrID = $_GET['clUrID'];

$updatedeletequery = " UPDATE tbusers SET 
    clUrStatus='2'
    WHERE clUrID = $clUrID; ";    


if(mysqli_query($connectdb, $updatedeletequery)){
    echo "<script> 
    alert(' Account is deleted successfully!'); 
    window.location = '../../index.php'; 
    </script>";  
    
} else{
    echo "<script>
    alert('Account deletion failed.');  
    window.location = '../webclient/UserProfile.php';
    </script>";  
  
}

?>
