<?php
session_start();

$conn= new mysqli('localhost','root','','CarRental')or die("Could not connect to mysql".mysqli_error($conn));

if($_GET['cn'] == 1){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $login = "SELECT *,TIMESTAMPDIFF(Year,`DoB`,NOW()) AS age
              FROM users
              WHERE email = '$email' AND password = md5('$password')";

  $query = mysqli_query($conn,$login);

  $numrow = mysqli_num_rows($query);
  if($numrow>0){
    $row = mysqli_fetch_array($query);
    $status = $row['status'];
    $verified = $row['verified'];
    $name = $row['username'];

    if($verified == 0){
      echo("<script type='text/javascript'> alert ('Email not yet verified.'); window.location = '../index.php'; </script>");
    }else{
      if($status == 1){
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['type'] = $row['accType'];
        $_SESSION['fname'] = $row['first name'];
        $_SESSION['mname'] = $row['middle name'];
        $_SESSION['lname'] = $row['last name'];
        $_SESSION['age'] = $row['age'];
        $_SESSION['status'] = $row['status'];
        $_SESSION['DoB'] = $row['DoB'];
      }

      if($status == 1){ ?>
      <script type='text/javascript'>
        alert('Welcome, <?php echo $name; ?>');
        window.location = "../CRS/data/view.php?sort=normal";
      </script>
        <?php
      }else{
        echo("<script type='text/javascript'> alert ('Account is deactivated.'); window.location = '../index.php'; </script>");
      }
    }
  }else{
    echo("<script type='text/javascript'> alert ('Email and Password does not match'); history.back();</script>");
  }
}

if($_GET['cn'] == 2){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $username = $_POST['username'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $contact = $_POST['contact'];
  $DoB = $_POST['DoB'];
  $address = $_POST['address'];
  $type = $_POST['type'];

  if(strlen(trim($contact)) != 11){
    echo("<script type='text/javascript'> alert ('Invalid contact #.'); history.back();</script>");
  }else{
    if(substr(trim($contact), 0, -9) != "09"){
      echo("<script type='text/javascript'> alert ('Invalid contact #.'); history.back();</script>");
    }else{
      $verification = "SELECT *
                  FROM users
                  WHERE email = '$email'";

      $query = mysqli_query($conn,$verification);

      $numrow = mysqli_num_rows($query);
      if($numrow>0){
        echo("<script type='text/javascript'> alert ('Email already taken'); history.back();</script>");
      }else{
        $to = "$email";
        $subject = "Email verification";

        $message = "
        <html>
        <head>
        <title>Hello, $email</title>
        </head>
        <body>
        <p>This email is sent to you to verify your registration in our website (CarRental.com).
          If you didnt sign up, please ignore this email. Otherwise, Please click this button.
        </p>
        <button><a href='https://cserwebhost.000webhostapp.com/verify.php?info=$email'></a></button>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <CarRental@gmail.com>' . "\r\n";
        $headers .= 'Cc: CarRental@gmail.com' . "\r\n";

        mail($to,$subject,$message,$headers);

        $insert = "INSERT INTO `users`(`username`, `password`, `email`, `contact`, `address`, `DoB`, `Created`, `accType`, `first name`, `middle name`, `last name`, `status`, `verified`)
                          VALUES ('$username',md5('$password'),'$email','$contact','$address','$DoB',NOW(),'$type','$fname','$mname','$fname',0,0)";

        $qry = mysqli_query($conn,$insert);
        if(!$qry){
          echo("<script type='text/javascript'> alert ('Sign up failed.'); history.back();</script>");
        }else{
          echo("<script type='text/javascript'> alert ('Registration success.'); history.back();</script>");
        }
      }
    }
  }
}

?>
