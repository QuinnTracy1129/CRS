<?php
session_start();
$conn= new mysqli('localhost','root','','CarRental')or die("Could not connect to mysql".mysqli_error($conn));
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

    <head>

    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CRS</title>

		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSS
		================================================== -->

		<link href='../css/googleapis.css' rel='stylesheet' type='text/css'>

		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="../css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="../css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="../css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="../css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="../css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>

    <body id="body">

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->

					<!-- logo -->
					<h1 class="navbar-brand">
						<b style="color:white;">CRS</b>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a href="../index.php">Home</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->

            </div>
        </header>
        <main class="site-content" role="main">
          <br /><br /><br />

          <?php if(!isset($_POST['change'])){ ?>
          <section id="login" style="text-align:center;">
            <div class="container">
              <div class="row">

                <div class="sec-title text-center wow animated fadeInDown">
                  <h2>Forgot password</h2>
                </div>
                <div style="position: relative; left: 29%;">
                <form action="" method="POST">
                <div class="col-md-5 contact-form wow animated fadeInLeft">
                    <div class="input-field">
                      <label>Enter your email address
                      <span class="color-red">*</span>
                      </label>
                      <input type="email" name="email" class="form-control" placeholder="Email address" required style="text-align:center;">
                    </div>
                    <div class="input-field">
                      <label>Enter date account was created
                      <span class="color-red">*</span>
                      </label>
                      <input type="date" name="date" class="form-control" required style="text-align:center;">
                    </div>
                    <button type="submit" name="change" class="btn btn-blue btn-effect">Submit</button>
                </div>
              </form>
            </div>
              </div>
            </div>
          </section>
        <?php }
        if(isset($_POST['change'])){
          $email = $_POST['email'];
          $date = $_POST['date'];

          $query = "SELECT * FROM `users` WHERE `email` = '$email'";
          $check = mysqli_query($conn,$query);
          $numrow = mysqli_num_rows($check);
          if($numrow>0){
            $row = mysqli_fetch_array($check);
            $Cdate = substr($row['Created'], 0, -9);
            if($date == $Cdate){  ?>
          <section id="login" style="text-align:center;">
            <div class="container">
              <div class="row">

                <div class="sec-title text-center wow animated fadeInDown">
                  <h2>Change password</h2>
                </div>
                <div style="position: relative; left: 29%;">
                <form action="" method="POST">
                <div class="col-md-5 contact-form wow animated fadeInLeft">
                    <div class="input-field">
                      <label>Enter new password
                      <span class="color-red">*</span>
                      </label>
                      <input type="password" name="password" class="form-control" placeholder="Password" required style="text-align:center;">
                      <input type="hidden" name="email" value="<?php echo $email; ?>" />
                    </div>
                    <div class="input-field">
                      <label>Confirm new password
                      <span class="color-red">*</span>
                      </label>
                      <input type="password" name="cpassword" class="form-control" placeholder="Confirm password" min="5" required style="text-align:center;">
                    </div>
                    <button type="submit" name="success" class="btn btn-blue btn-effect">Submit</button>
                </div>
              </form>
            </div>
              </div>
            </div>
          </section>
        <?php }else{ ?>
          <script> alert("Incorrect date!"); window.location = "../index.php"; </script>
        <?php }
      }else{ ?>
          <script> alert("Email doesn't exist!"); window.location = "../index.php"; </script>
      <?php  }
      }

      if(isset($_POST['success'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if($password == $cpassword){
          $pass = md5($password);
          $change = "UPDATE `users` SET `password`='$pass' WHERE `email` = '$email'";
          mysqli_query($conn,$change); ?>
          <script> alert("Succesfully changed!"); window.location = "../index.php"; </script>
        <?php }else{ ?>
          <script> alert("Passwords do not match!"); window.location = "../index.php"; </script>
        <?php }
      }?>

      </main>

      <!-- Essential jQuery Plugins
      ================================================== -->
      <!-- Main jQuery -->
          <script src="../js/jquery-1.11.1.min.js"></script>
      <!-- Twitter Bootstrap -->
          <script src="../js/bootstrap.min.js"></script>
      <!-- Single Page Nav -->
          <script src="../js/jquery.singlePageNav.min.js"></script>
      <!-- jquery.fancybox.pack -->
          <script src="../js/jquery.fancybox.pack.js"></script>
      <!-- Owl Carousel -->
          <script src="../js/owl.carousel.min.js"></script>
          <!-- jquery easing -->
          <script src="../js/jquery.easing.min.js"></script>
          <!-- Fullscreen slider -->
          <script src="../js/jquery.slitslider.js"></script>
          <script src="../js/jquery.ba-cond.min.js"></script>
      <!-- onscroll animation -->
          <script src="../js/wow.min.js"></script>
      <!-- Custom Functions -->
          <script src="../js/main.js"></script>
      </body>
  </html>
