<?php
include '../includes/connectdb.php';

if($_SESSION['admin_sid']==session_id())
{
    $clUrID = $_SESSION['clUrID'];
    $clUrUsername = $_SESSION['clUrUsername'];
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
        <link rel="stylesheet" href="../css/admin_home_style.css">
    </head>

    <body id="body-pd">
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
                        <a href="AdminHome.php" class="nav_link active"> 
                            <i class='bx bx-grid-alt nav_icon'></i> 
                            <span class="nav_name fw-bold">Dashboard</span> 
                        </a> 
                        <a href="AdminProfile.php" class="nav_link">
                            <i class='bx bx-user nav_icon'></i> 
                            <span class="nav_name">Edit Profile</span> 
                        </a>
                        <a href="admin_usertable.php" class="nav_link"> 
                            <i class='bx bx-table nav_icon'></i>
                            <span class="nav_name">User Table</span> 
                        </a> 
                        <a href="AdminExamList.php" class="nav_link"> 
                            <i class='bx bx-message-square-detail nav_icon'></i> 
                            <span class="nav_name">Exam List</span> 
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
                <!-- Profile Banner -->
                <div class="row" id="i--row--banner">
                    <div class="col-2">
                        <img src="../images/Display Picture Icon.png" alt="Photo/Icon" class="img-fluid m-3" id="i--banner--dp">
                    </div>
                    <div class="col-8">
                        <h1 class="text-light mt-2" id="i--banner--title">Welcome, <?php echo $clUrUsername ?></h1>
                        <p class="text-light" id="i--banner--subtitle">You can manage the exam website here</p>
                    </div>
                    <div class="col-2">
                        <a role="button" class="btn btn-light my-3" id="i--button--editProfile">Edit Profile</a>
                    </div>
                </div>
                <!-- Edit History -->
                <div class="row mt-5">
                    <div class="col display-6">
                        RECENT EDITED EXAM
                    </div>
                </div>
                <!-- Blue Line -->
                <div class="row">
                    <div class="col-4" id="i--line--blue"></div>
                </div>
                <!-- Edit Banners -->
                <div class="row my-2 gy-3">
                <!-- 
                    Things to change:
                        Since this is recent edited exam
                        we need to explicitly change the content by sorting it via
                        date, status
                -->
                <?php

                    $sql = "SELECT * FROM tbexam";
                    $result = $connectdb->query($sql);

                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-12">';
                        echo '<div class="card" id="i--card--edit">
                                <div class="card-body">
                                    <div class="container">';
                                echo ' <div class="row fs-5">
                                        '.$row["clExName"].'
                                        </div>
                                        <div class="row" id="i--line--card"></div>
                                        <div class="row mt-4 fs-5">
                                            EDIT DATE:
                                        </div>
                                        <div class="row my-2 fs-5">
                                        EDIT DETAILS:
                                        </div>';
                        echo '      </div>
                                </div>
                              </div>';
                        echo '</div>';
                    }
                }

                ?>
                </div>
            </div>
        </div>
        <!--Container Main end-->
                     
        <footer>
            <!-- This is where the footer is -->
        </footer>

        <!-- Custom Javascript -->
        <script src="../javascript/admin_home_script.js"></script>
    
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
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