<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Winsoft</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	<?php 
session_start();
		 error_reporting(0);
		  if($_SESSION['log_id']=="")
		 {
		header("location:../../index.php");
		}
		include("connect.php");
		$mail=$_SESSION['email'];
		$sql = "SELECT * FROM employee_tbl where email='$mail'"; 
        $result = $connect->query($sql);
		$row = $result->fetch_assoc();

		 
	
		 
?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-desktop"></i> <span>WinSoft</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../../winsoft/user/BS3/StepRegistration/uploads/<?php echo $row['photo'];?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['email']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php include('sidebar_user.php'); ?>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="index.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="../../winsoft/user/BS3/StepRegistration/uploads/<?php echo $row['photo'];?>" alt=""><?php echo $_SESSION['email']; ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <!--<li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>-->
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
         
				<?php	include("connect.php");
				$mail=$_SESSION['email'];
				$sql = "SELECT * FROM session_tbl where email='$mail'"; 
				$result = $connect->query($sql);
				$row = $result->fetch_array();
				?>
                
                <div class="">
              <div class="col-md-12 col-sm-6">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Acadamics</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Documents</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					  <?php	include("connect_old.php");
				$mail=$_SESSION['email'];
				$sql1 = "SELECT * FROM application where email='$mail'"; 
				$result1 = $connect->query($sql1);
				$row1 = $result1->fetch_assoc();
				?>
                      <form method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                               <label>Name</label>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $row1['name']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>DOB</label>
                                                <input type="date" class="form-control" placeholder="" value="<?php echo $row1['dob']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <label>Blood</label>
                                                <input type="text" class="form-control" placeholder="" value=" <?php echo $row1['blood']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" placeholder="Email" value="<?php echo $_SESSION['email']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="text" name="mobile" class="form-control" placeholder="Mobile" value="<?php echo $row1['mobile']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>FLAT/HOME</label>
                                                <input type="text" name="home" class="form-control" placeholder="Home Address" value="<?php echo $row1['home']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
										 <div class="form-group">
                                                <label>Gender</label>
                                               <input type="text" class="form-control" placeholder="" value="<?php echo $row1['gender']; ?>" disabled="disabled">
                                            </div>
                                        </div>
										 <div class="col-md-4">
                                           
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" placeholder="City" value="<?php echo $row1['city']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="number" name="pin" class="form-control" placeholder="ZIP Code" value="<?php echo $row1['pin']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
									 <div class="row">
									 <div class="col-md-4">
                                            <div class="form-group">
                                                <label>District</label>
                                               <input type="text" class="form-control" placeholder="" value="<?php echo $row1['district']; ?>" disabled="disabled">
                                            </div></div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>State</label>
												 <input type="text" name="state" class="form-control" placeholder="" value="<?php echo $row1['state']; ?>" disabled="disabled">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" name="country" class="form-control" placeholder="" value="<?php echo $row1['country']; ?>" disabled="disabled">
                                            </div>
                                        </div> </div>
                                    
									 
                                    <div class="clearfix"></div>
                                </form>
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        
						<h6>SSLC Details</h6>
						 <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Percentage%</label>
                                                <input type="number" class="form-control" placeholder="" value="<?php echo $row1['grade1']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                 <label for="">Passout Year</label>
                                                <input type="text" name="" class="form-control" placeholder="" value="<?php echo $row1['year1']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                  
									 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Institution</label>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $row1['institute1']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                 <label for="">Board</label>
                                                <input type="text" name="" class="form-control" placeholder="" value="<?php echo $row1['board1']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
									<h6>Plus2 Details</h6>
						 <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Percentage%</label>
                                                <input type="number" class="form-control" placeholder="" value="<?php echo $row1['grade2']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                 <label for="">Passout Year</label>
                                                <input type="text" name="" class="form-control" placeholder="" value="<?php echo $row1['year2']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                  
									 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Institution</label>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $row1['institute2']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                 <label for="">Board</label>
                                                <input type="text" name="" class="form-control" placeholder="" value="<?php echo $row1['board2']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
									<h6>Graduation Details</h6>
						 <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Percentage%</label>
                                                <input type="number" class="form-control" placeholder="" value="<?php echo $row1['grade3']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                 <label for="">Passout Year</label>
                                                <input type="text" name="" class="form-control" placeholder="" value="<?php echo $row1['year3']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                  
									 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Institution</label>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $row1['institute3']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                 <label for="">Board</label>
                                                <input type="text" name="" class="form-control" placeholder="" value="<?php echo $row1['board3']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
									<h6>Post-Graduation Details</h6>
						 <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Percentage%</label>
                                                <input type="number" class="form-control" placeholder="" value="<?php echo $row1['grade4']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                 <label for="">Passout Year</label>
                                                <input type="text" name="" class="form-control" placeholder="" value="<?php echo $row1['year4']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                  
									 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Institution</label>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $row1['institute4']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                 <label for="">Board</label>
                                                <input type="text" name="" class="form-control" placeholder="" value="<?php echo $row1['board4']; ?>" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
									

                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      <div class="col-md-12 col-sm-12  ">
						<div class="x_panel">
						  <div class="x_title">
						  <div class="x_content">
                           <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>QUALIFICATION</th>
                          <th>DOCUMENT</th>
                          <th>FILE</th>
                        </tr>
                      </thead>
                      <tbody>
					  <tr>
                         <th scope="row">1</th>
                          <td>SSLC Certificate</td>
                          <td><a href="../../winsoft/user/BS3/StepRegistration/uploads/<?php echo $row1['sslc'];?>" class="btn btn-app">
                    <i class="fa fa-save"></i> Save
                  </a></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>PLUS2 Certificate</td>
                          <td><a href="../../winsoft/user/BS3/StepRegistration/uploads/<?php echo $row1['plus2'];?>" class="btn btn-app">
                    <i class="fa fa-save"></i> Save
                  </a></td>
                          
                        </tr>
                        <tr>
                         <th scope="row">3</th>
                          <td>Degree Certificate</td>
                          <td><a href="../../winsoft/user/BS3/StepRegistration/uploads/<?php echo $row1['degree'];?>" class="btn btn-app">
                    <i class="fa fa-save"></i> Save
                  </a></td>
                        </tr>
                        <tr>
                         <th scope="row">4</th>
                          <td>PG Certificate</td>
                          <td><a href="../../winsoft/user/BS3/StepRegistration/uploads/<?php echo $row1['pg'];?>" class="btn btn-app">
                    <i class="fa fa-save"></i> Save
                  </a></td>
                        </tr>
						<tr>
                         <th scope="row">5</th>
                          <td>RESUME</td>
                          <td><a href="../../winsoft/user/BS3/StepRegistration/uploads/<?php echo $row1['resume'];?>" class="btn btn-app">
                    <i class="fa fa-save"></i> Save
                  </a></td>
                        </tr>
						
                      </tbody>
                    </table>
                    

							  </div>
							</div>
						  </div>

                      </div>
                    </div>
                  </div>
				   </div>
                  </div>
                
        <!-- /page content -->

        <!-- footer content -->
        <!--<footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>-->
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
