<?php
    //Open Connection
    include '../includes/connectdb.php';
	if($_SESSION['admin_sid']==session_id()) {
	    	// (tbExam)Fetch Exams Data======================================================================(START)
            $sql_query = "SELECT `clExID`,`clExName`,`clExDescription`,`clExPublish`,`clExLastEditedBy`,`clExPublishedBy` FROM `tbExam`;";
            $fetch_sql_query = mysqli_query($connectdb, $sql_query);
            if($fetch_sql_query){
                $tbExam_data = null; // Without this, it will likely cause an Error if the table data is empty, which means that it will not go through the loop below, which means that this variable is never declared.
                while($tbExam_row = mysqli_fetch_array($fetch_sql_query)){
                    // $tbExam_row['clExDescription'] = nl2br($tbExam_row['clExDescription']);// Convert \n to <br>
                    $tbExam_data[] = $tbExam_row;
                }
            }
            else{
                echo mysqli_error($connectdb);
            }
            // (tbExam)Fetch Exams Data======================================================================(END)
            // (tbusers)Fetch Users Data======================================================================(START)
            $sql_query = "SELECT `clUrID`,`clUrUsername` FROM `tbusers`;";
            $fetch_sql_query = mysqli_query($connectdb, $sql_query);
            if($fetch_sql_query){
                $tbusers_data = null; // Without this, it will likely cause an Error if the table data is empty, which means that it will not go through the loop below, which means that this variable is never declared.
                while($tbusers_row = mysqli_fetch_array($fetch_sql_query)){
                    // $tbusers_row['clExDescription'] = nl2br($tbusers_row['clExDescription']);// Convert \n to <br>
                    $tbusers_data[] = $tbusers_row;
                }
            }
            else{
                echo mysqli_error($connectdb);
            }
            // (tbusers)Fetch Users Data======================================================================(END)

            //Close Connection
            mysqli_close($connectdb);


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Erovoutika Exam Website - Admin</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
            crossorigin="anonymous"
        />

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/admin_examlist_style.css">
        
        <!-- Scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="../javascript/global-scripts.js"></script>
    </head>

    <header class="header shadow" id="header">
        <div class="header_toggle"> 
            <i class='bx bx-menu' id="header-toggle"></i> 
        </div>
        <div id="i--account--admin">
            <div class="header_img"> 
                <a href="AdminProfile.php">
                    <img src="../images/Display Picture Icon.png" alt="display picture"> 
                </a>
            </div>
            <div>
                <button type="button" class="btn ms-4 mt-2">
                    <a href="../includes/logout.php" class="fw-bold" id="i--button--logout">Logout</a>
                </button>
            </div>
        </div>
    </header>

    <body id="body-pd">

        <!-- SIDE BAR -->
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> 
                    <!-- Admin Home with Logo -->
                    <a href="AdminHome.php" class="nav_logo"> 
                        <i>
                            <img src="../images/Small Logo.png" alt="Erovoutika Logo" id="i--logo--erovoutika">
                        </i> 
                        <span class="nav_logo-name fs-5 fw-bold">Erouvotika</span> 
                    </a>
                    <div class="nav_list"> 
                        <a href="AdminHome.php" class="nav_link"> 
                            <i class='bx bx-grid-alt nav_icon'></i> 
                            <span class="nav_name">Dashboard</span> 
                        </a> 
                        <a href="AdminProfile.php" class="nav_link">
                            <i class='bx bx-user nav_icon'></i> 
                            <span class="nav_name">Edit Profile</span> 
                        </a>
                        <a href="admin_usertable.php" class="nav_link"> 
                            <i class='bx bx-table nav_icon'></i>
                            <span class="nav_name">User Table</span> 
                        </a> 
                        <a href="AdminExamList.php" class="nav_link active">
                            <i class='bx bx-message-square-detail nav_icon'></i> 
                            <span class="nav_name fw-bold">Exam List</span> 
                        </a>
                    </div>
                </div> 
                    <a href="adminsignup_template.php"  class="btn btn-primary ms-3 mb-3">
                        <i class="bi bi-pencil-square"></i> 
                        <span class="nav_name" id="i--label--signout">Sign Up</span>
                    </a>
                </div> 
            </nav>
        </div>

        <!--Container Main start-->
        <div class="height-100" id="i--container--mainContent">
            <div class="container my-3">
                <!-- Exam List -->
                <div class="row mt-5">
                    <div class="col display-6">
                        EXAM LIST
                    </div>
                </div>

                <!-- Blue Line -->
                <div class="row">
                    <div class="col-3" id="i--line--blue"></div>
                </div>

                <!-- Cards Container -->
                <div class="row my-2 gy-3">
                    <div id="i-div--examlist-empty"></div>
                    <div class="col-12" id="i-div--examlist-display"></div>
                </div>
                <div class="row">
                    <div class="col-9"></div>
                    <div class="col-3">
                        <a id="i-a--examlist-addbutton" class="btn btn-primary fs-4 c-a--examlist" name="modify_add_button" onclick="modifyExamList(this.name,null,null)">Add New Exam</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Container Main end-->

        <!-- Custom Javascript -->
        <script type="text/javascript" src="../javascript/admin_home_script.js"></script>
        <script type="text/javascript">
            // Transfer fetched 'items' table from the stored 2D-array on PHP to a 2D-array on JavaScript
            var tbExam_data = <?php echo json_encode($tbExam_data); ?>;
            var tbusers_data = <?php echo json_encode($tbusers_data); ?>;
            var curr_clUrID_value = <?php echo $_SESSION['clUrID']; ?>;
            var curr_clUrUsername_value = <?php echo json_encode($_SESSION['clUrUsername']); ?>;
        </script>
        <script type="text/javascript" src="../javascript/admin-controlpanel-examlist.js"></script>


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
    </body>

     <footer>
        <!-- This is where the footer is -->
    </footer>
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
