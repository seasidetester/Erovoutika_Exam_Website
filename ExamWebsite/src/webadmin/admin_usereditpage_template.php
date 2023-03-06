<?php
include '../includes/connectdb.php';

if($_SESSION['admin_sid']==session_id())
{
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Edit User</title>
  </head>
  <body>
    
    <?php
      $clUrID = $_GET['clUrID'];

      $userQuery = mysqli_query($connectdb, "SELECT * FROM tbusers where clUrID = '$clUrID'");
      while($row = mysqli_fetch_array($userQuery)){
        $clUrID = $row['clUrID'];
        $clUrUsername = $row['clUrUsername'];
        $clUrFirstname = $row['clUrFirstname'];
        $clUrLastname = $row['clUrLastname'];
		$clUrLevel = $row['clUrLevel'];
        $clUrcontact_num = $row['clUrcontact_num'];
        $clUremail = $row['clUremail'];
        $clUraddress = $row['clUraddress'];
    }
 
    ?>

<form class="" action="admin_usereditpage_template.php" method="post">
		  	<div>
				<h1>ACCOUNT REGISTRATION</h1>
				<p>
				Changes you make will be visible to other users
				</p>
                <input type="hidden" name="userID" value="<?php echo $userID; ?>">
			</div>
			<div>
				<div>
					<label for="clUrFirstname">First Name:</label>
					<input type="text" name="clUrFirstname"  value="<?php echo $clUrFirstname; ?>" placeholder="First Name" required><br>
				</div>
				<div class="w-1/2">
					<label for="clUrLastname">Last Name:</label>
					<input type="text" name="clUrLastname"  value="<?php echo $clUrLastname; ?>" placeholder="Last Name" required><br>
				</div>
			</div>
			<div>
				<div>
					<label for="clUrUsername">Username:</label>
					<input type="text" name="clUrUsername"  value="<?php echo $clUrUsername; ?>" placeholder="Username" required><br>
				</div>
				<br>
			</div>
			<div>
				<div>
					<label for="clUrLevel">User Level</label>
					<select  value="<?php echo $clUrLevel; ?>" name="clUrLevel">
						<option value="0">[0]admin</option>
						<option value="1" selected>[1]client</option>
					</select>
				</div>
				<div >
					<label for="clUrcontact_num">Contact Number:</label>
					<input type="text" name="clUrcontact_num"  value="<?php echo $clUrcontact_num; ?>" placeholder="09xxxxxxxxx"><br>
				</div>
			</div>
			<div>
				<div>
					<label for="clUremail">Email:</label>
					<input type="text" name="clUremail" value="<?php echo $clUremail; ?>" placeholder="sample@sample.com"><br>
				</div>
				<div>
					<label for="clUraddress">Address:</label>
					<input type="text" name="clUraddress" value="<?php echo $clUraddress; ?>" placeholder="______ City"><br>
				</div>
			</div>

            <button type="submit" formaction="../crud/tbusersAdminUpdate.php" name="button1">Update User</button>
            <button href="admin_usereditpage_template.php" name="button" type="reset">Clear</button>
          </form>

  </body>
</html>
<?php
	}else
	{
		if($_SESSION['client_sid']==session_id()){
			header("location:404.php");		
		}
		else{
				header("location:../login_template.php");
			}
	}
?>