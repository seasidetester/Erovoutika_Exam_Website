<?php
include '../includes/connectdb.php';
	if($_SESSION['admin_sid']==session_id())
	{
		?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
	<!--
		This is the styles stuff.
			since css folder is 1 folders back.
			I use ../
			If its 2 folder back.
			Use ../../
	 -->
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <p>im admin</p>
    
	<a href="adminsignup_template.php">
		<button>
			signup
		</button>
	</a>

	<br>
	

    <a href="../includes/logout.php">logout</a>

	
</body>
</html>
<?php
	}else
	{
		if($_SESSION['client_sid']==session_id()){
			header("location:../includes/error.php");		
		}
		else{
				header("location:../login_template.php");
			}
	}
?>