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

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/admin_checkexam_style.css">
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
                <div class="row mt-3">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="row">
                            <b><div class="float-start fs-1">EXAM TITLE</div></b>
                            </div>

                            <div class="row">
                                <b><div class="float-start fs-3">Examinee: Sample Name</div></b>
                            </div>
                        </div>

                        <div class="ol-12 col-sm-6 float-end">
                            <b><div class=" float-end fs-3 mt-4">Score: 3/50</div></b>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">

                        </div>
                    </div>
                </div>

                <!-- Blue Line -->
                <div class="row">
                    <div class="col" id="i--line--blue"></div>
                </div>

                <!-- Cards -->
                <div class="row my-2 gy-3">
                    <div class="col-12">
                        <div class="row mt-3">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                      <div class="col-12 col-sm-6">
                                        <b><div class="float-start fs-5">01 MULTIPLE CHOICE</div></b>
                                      </div>
                                      <div class="ol-12 col-sm-6">
                                          <b><div class="float-end fs-5">1/1</div></b>
                                      </div>
                                </div>
                                </div>
                                <div class="card-body">
                                    <div class="question ml-sm-5 pl-sm-5 pt-2">
                                        <div class="h5">
                                            <b><p>Question:</p></b>
                                            <p>The terms "bitmap," "b-tree," and "hash" refer to which type of database structure?</p>
                                        </div>

                                        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3 ms-4" id="options">

                                            <label class="options fs-6">View
                                                <input type="radio" name="radio" checked>
                                                <span class="checkmark"></span>
                                            </label>

                                            <label class="options fs-6">Function
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>

                                            <label class="options fs-6">Index
                                                <input type="radio" name="radio" checked>
                                                <span class="checkmark"></span>
                                            </label>

                                            <label class="options fs-6">Stored Procedure
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>

                                            <label class="options fs-6">Trigger
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                      <div class="col-12 col-sm-6">
                                        <b><div class="float-start fs-5">02 FILL IN THE BLANK</div></b>
                                      </div>
                                      <div class="ol-12 col-sm-6">
                                          <b><div class="float-end fs-5">1/1</div></b>
                                      </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="question ml-sm-5 pl-sm-5 pt-2">
                                        <div class="h5">
                                            <b><p>Question:</p></b>
                                            <p>Software process model that is best for client server applications and provides accurate picture of current state of the project.</p>
                                        </div>

                                        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3 ms-4" id="options">
                                            <b><label for="ClientAnswer" class="fs-5 mt-3">Client Answer:</label></b>
                                            <input class="form-control fs-6" type="text" id="ClientAnswer" value="Concurrent Development Model" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Container Main end-->

        <!-- Custom Javascript -->
        <script src="../javascript/admin_home_script.js"></script>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>

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
