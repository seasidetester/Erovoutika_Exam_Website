<?php
include '../includes/connectdb.php';
if($_SESSION['admin_sid']==session_id())
{
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

        <!-- Bootstrap Script-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/admin_examineelist_style.css">
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
                <div> 
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

                <!-- Exam Title -->
                <div class="row mt-3">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <b><div class="float-start fs-1">EXAM TITLE</div></b>
                            </div>
                        </div>

                        <div class="ol-12 col-sm-6 float-end">
                            <b><div class=" float-end fs-4 mt-3">Number of Examinees: 50</div></b>
                        </div>
                    </div>
                </div>

                <!-- Blue Line -->
                <div class="row">
                    <div class="col" id="i--line--blue"></div>
                </div>

                <!-- Cards -->
                <div class="card p-2 mt-4"> <!-- Card -->
                    <div class="d-flex justify-content-between"> <!-- Content -->
                        <div class="d-flex flex-row align-items-center">
                            <img src="../images/Display%20Picture%20Icon.png" alt="Admin" class="rounded-circle ms-2 me-2 mt-2 mb-2" width="70"> <!-- Image -->
                            <div class="ml-2">
                                <h6 class="mb-0">Sample Name</h6>
                                <div class="d-flex flex-row mt-1">
                                    <div><span class="ml-2">Score: 50/50</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <span class="date-time">Date Taken: 11/4/2020</span>
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                    </div>
                    <a href="#" class="stretched-link"></a>
                </div>

                <div class="card p-2 mt-4">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <img src="../images/Display%20Picture%20Icon.png" alt="Admin" class="rounded-circle ms-2 me-2 mt-2 mb-2" width="70">
                            <div class="ml-2">
                                <h6 class="mb-0">Sample Name</h6>
                                <div class="d-flex flex-row mt-1">
                                    <div><span class="ml-2">Score: 50/50</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <span class="date-time">Date Taken: 11/4/2020</span>
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                    </div>
                    <a href="#" class="stretched-link"></a>
                </div>

                <div class="card p-2 mt-4">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <img src="../images/Display%20Picture%20Icon.png" alt="Admin" class="rounded-circle ms-2 me-2 mt-2 mb-2" width="70">
                            <div class="ml-2">
                                <h6 class="mb-0">Sample Name</h6>
                                <div class="d-flex flex-row mt-1">
                                    <div><span class="ml-2">Score: 50/50</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <span class="date-time">Date Taken: 11/4/2020</span>
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                    </div>
                    <a href="#" class="stretched-link"></a>
                </div>

                <div class="card p-2 mt-4">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <img src="../images/Display%20Picture%20Icon.png" alt="Admin" class="rounded-circle ms-2 me-2 mt-2 mb-2" width="70">
                            <div class="ml-2">
                                <h6 class="mb-0">Sample Name</h6>
                                <div class="d-flex flex-row mt-1">
                                    <div><span class="ml-2">Score: 50/50</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center">
                            <span class="date-time">Date Taken: 11/4/2020</span>
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                    </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <!--Container Main end-->

        <!-- Custom Javascript -->
        <script src="../javascript/admin_home_script.js"></script>

        <footer>
            <!-- This is where the footer is -->
        </footer>
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
