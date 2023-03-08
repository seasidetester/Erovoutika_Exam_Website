<?php
  include '../includes/connectdb.php';
  $clUrUsername = $_POST['clUrUsername'];
  $clUrPassword = $_POST['clUrPassword'];
  $clUrFirstname = $_POST['clUrFirstname'];
  $clUrLastname = $_POST['clUrLastname'];
  $clUrLevel = $_POST['clUrLevel'];
  $clUrcontact_num = $_POST['clUrcontact_num'];
  $clUremail = $_POST['clUremail'];
  $clUraddress = $_POST['clUraddress'];

  //Check if username already exist
  $sql = "SELECT * FROM tbusers where clUrUsername = '$clUrUsername'";
  $result = $connectdb->query($sql);
  $checkUser = $result->num_rows;

  if ($checkUser == 0) {
    $usersquery = "INSERT INTO tbusers (clUrFirstname, clUrLastname, clUrUsername, clUrPassword, clUrLevel, clUrcontact_num, clUremail, clUraddress)
                  VALUES ('$clUrFirstname','$clUrLastname','$clUrUsername', '$clUrPassword', 
                          '$clUrLevel','$clUrcontact_num','$clUremail','$clUraddress');";
    mysqli_query($connectdb, $usersquery);

    echo "<script> 
    alert('Successfully Signed Up!'); 
    window.location = '../webadmin/admin_usertable.php';
    </script>"; 
  }    
  else{
    echo "<script>
    alert('Failed to Sign Up. Username already exist.');  
    window.location = 'adminsignup_template.php';
    </script>"; 
  }

  /*$usersquery = "INSERT INTO tbusers (clUrFirstname, clUrLastname, clUrUsername, clUrPassword, clUrLevel, clUrcontact_num, clUremail, clUraddress)
                  VALUES ('$clUrFirstname','$clUrLastname','$clUrUsername', '$clUrPassword', 
                          '$clUrLevel','$clUrcontact_num','$clUremail','$clUraddress');";

  if(mysqli_query($connectdb, $usersquery)){
    echo "<script> 
    alert('Account is successfully added!'); 
    window.location = '../webadmin/admin_usertable.php'; 
    </script>";  
    
  } else{
    echo "<script>
    alert('Failed to add.');  
    window.location = 'adminsignup_template.php';
    </script>"; 
    
  }*/
 ?>
