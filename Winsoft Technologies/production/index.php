<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>winsoft</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
  <?php

   include("connect.php");
   session_start();
   
   $er='';
 if(isset($_POST['submit']))
		 {
		 $email=$_POST['email'];
		 $pass=$_POST['pass'];
		 
         $log="select * from login_tbl where email='".$email."' and password='".$pass."'";
         $result1 = $connect->query($log);
     if($result1->num_rows >= 1)
        {
    $row1 = $result1->fetch_assoc();
	
	$_SESSION['log_id']=$row1['log_id'];
	$_SESSION['email']=$row1['email'];
	
	//$_SESSION['pas']=$row1['password'];
     if($row1['log_id'] == 1)
    {
    header("location:..\production\home_admin.php");
    }
	if($row1['log_id'] != 1)
	header("location:..\production\home_user.php");
	$updt=mysqli_query($connect,"UPDATE login_tbl SET status='1' where email='$email' ");
										$query1="select * from session_tbl where email='".$email."'";
										$duplicate1 = $connect->query($query1);
									   if($duplicate1->num_rows == 0)
										{
										  $ins=mysqli_query($connect,"insert into session_tbl(email,in_time,out_time) values ('$email',now(),now())");
										 }
										  else
										{
										  $updt=mysqli_query($connect,"UPDATE session_tbl SET in_time=now() where email='$email'");
										}
	
	}
	else
	{
	$er="Invalid Credentials!!!";
	}
	}
	


?>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post">
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="pass" />
              </div>
              <div>
               <button class="login100-form-btn" type="submit" name="submit">
							Login
						</button>
              </div>
			  <center><span class="txt1" style="color:#FF0000"><?php echo $er;?></span></center>
						</span>

              <div class="clearfix"></div>

              <div class="separator">
                <!--<p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>-->

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-desktop"></i> Winsoft Technologies</h1>
                  <p>©2016 All Rights Reserved.WinSoft. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

       <!-- <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>-->
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
