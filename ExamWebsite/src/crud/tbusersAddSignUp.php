<?php
  include '../includes/connectdb.php';

  $clUrUsername = $_POST['clUrUsername'];
  $clUrPassword = $_POST['clUrPassword'];
  $clUrFirstname = $_POST['clUrFirstname'];
  $clUrLastname = $_POST['clUrLastname'];
  $clUrcontact_num = $_POST['clUrcontact_num'];
  $clUremail = $_POST['clUremail'];
  $clUraddress = $_POST['clUraddress'];

  // put error catching cases 

  $usersquery = "INSERT INTO tbusers ( clUrFirstname, clUrLastname, clUrUsername, clUrPassword, 
                                  clUrcontact_num, clUremail, clUraddress)
                  VALUES ('$clUrFirstname','$clUrLastname','$clUrUsername', '$clUrPassword', 
                          '$clUrcontact_num','$clUremail','$clUraddress');";
                          
  //Check if username already exist
  $sql = "SELECT * FROM tbusers where clUrUsername = '$clUrUsername'";
  $result = $connectdb->query($sql);
  $checkUser = $result->num_rows;

  if ($checkUser == 0) {
    mysqli_query($connectdb, $usersquery);
    echo "<script> 
    alert('Successfully Signed Up!'); 
    window.location = '../login.php';
    </script>"; 
  }    
  else{
    echo "<script>
    alert('Failed to Sign Up.');  
    window.location = '../signup.php';
    </script>"; 
  }
  
 ?>
