<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Winsoft Technologies </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom styling plus plugins -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	<?php 
session_start();
		 error_reporting(0);
		  if($_SESSION['log_id']=="")
		 {
		header("location:../../index.php");
		
}
		 
		 
?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-desktop"></i> <span>WinSoft </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['email']; ?> </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php include('sidebar_admin.php'); ?>

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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
            <!-- /top navigation -->
						<?php    include("connect.php");
									$eid=$_GET['id'];
									
									$sql = "SELECT * FROM employee_tbl where emp_id='$eid'";
                                    $result = $connect->query($sql);
									$row = $result->fetch_assoc();  
									
									
									$eid=$row['emp_id'];
						          $did=$row['des_id'];
						         $sql1 = "select * from designation where des_id = '$did'" ;
                                $result1 = $connect->query($sql1);
								 $row1 = $result1->fetch_assoc();
								 
								  $sql01 = "select * from emp_bank_details where emp_id = '$eid'" ;
                                $result01 = $connect->query($sql01);
								 $row01 = $result01->fetch_assoc();
								
								$date = date("m.Y");
								$sq2 = "SELECT count(*) FROM `attendance_tbl` WHERE `emp_id` = '$eid' AND `att_date` LIKE '%$date' " ;
                                $res = $connect->query($sq2);
								$row0= $res->fetch_array();
								
								 
							
								$sql5 = "select * from salary_tbl where des_id = '$did'" ;
                                $result8 = $connect->query($sql5);
							    $row5= $result8->fetch_assoc();
								
								$days = $row0['0'];
								$sal = $row5['total'];
								$salarypd= $sal/28;
								$total = $days * $salarypd ;
								
								$pf_id=$row5['pf_id'];
								$sql6 = "select * from pf_tbl where pf_id = '$pf_id'" ;
                                $result9 = $connect->query($sql6);
								$row6= $result9->fetch_assoc();
									
									
									?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
             

            
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  

                      <!-- title row -->
                      <div class="row">
                        <div class="">
                          <h4>
                                          <i class="fa fa-money"></i> Payslip 
                                      </h4>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                       Company:
                          <address>
                                          <strong>Winsoft Technologies.</strong>
                                          <br>Infopark Tower 787543
                                          <br>Kochi, Kerala ,India.
                                          <br>Phone :+91 9212398761
                                          <br>Email: winsofttech@gmail.com
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          Employee:
                          <address>
                                          <strong><?php echo $row['name']; ?></strong>
                                          <br><?php echo $row1['des_name']; ?>
                                          <br> Winsoft Technologies
                                          <br>Phone: <?php echo $row['phone']; ?> 
                                          <br>Email :<?php echo $row['email']; ?> 
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>BANK:  <?php echo $row01['bank_name']; ?> </b>
                          <br>
                          <br>
                          <b>BRANCH: <?php echo $row01['bank_branch']; ?> </b> 
                          <br>
                          <b>AC.No: <?php echo $row01['ac_no']; ?></b> 
                          <br>
                          <b>IFSE: <?php echo $row01['ifsc_no']; ?> </b>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="  table col-md-6">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Serial #</th>
                                <th>Earnings</th>
                                
								
                                <th>Amount</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Basic Pay </td>
                                <td>₹ <?php echo $row5['basic']; ?></td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Allowance</td>
								<td>₹ <?php echo $row5['allowance']; ?></td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Convayance</td>
                                
                                <td>₹ <?php echo $row5['conveyance']; ?></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td> </td>
                                
                                <td></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
						<div class="  table col-md-6">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Serial #</th>
                                <th>Deductions</th>
                                
								
                                <th>Amount</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Provident Fund (PF) </td>
                                <td><?php echo $row6['pf_amount']; ?>%</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Salary Loan</td>
                               
                                <td>₹ 0.00</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Extra Leave </td>
                                
                                <td>₹ 0.00</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td> </td>
                                
                                <td></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                       
                        <!-- /.col -->
                        <div class="col-md-12">
                         
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                
                                <tr>
								 <td></td>
								  <td></td>
								  <td></td>
								  <td></td>
								  <td></td>
								  <td></td> <td></td>
								  <td></td>
								  <td></td>

                                  <th>Total:</th>
                                  <td><strong>₹ <?php echo (round($total,2)); ?></strong></td>
                                </tr>
								
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class=" ">
                          <button class="btn btn-default" onClick="window.print();"><i class="fa fa-print"></i> Print</button>
                      
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
         <!-- <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>-->
          <div class="clearfix"></div>
        </footer>
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>