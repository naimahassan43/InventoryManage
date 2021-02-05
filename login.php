<?php
session_start();
$_SESSION['user']='';
$_SESSION['userid']='';
include 'auth/connection.php';
$conn= connect();
$message='';
if (isset($_POST['submit'])) {
  $uName = $_POST['uname'];
  $pass = $_POST['pass'];

  $sql = "SELECT * FROM users_info WHERE u_name='$uName' and password='$pass'";
  $res = $conn->query($sql);

  if (mysqli_num_rows($res)==1) {
    $user                 = mysqli_fetch_assoc($res);
    $_SESSION['user']     = $user['name'];
    $_SESSION['userid']     = $user['id'];
    header('Location:dashboard.php');
  }
  else {
    $message = "Credential Missmatch";
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Latest compiled JavaScript -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css"> -->
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">
  <title>Welcome</title>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a0d2968dea.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="logo">

  </div>
  <form method="post" action="">
    <div class="box bg-img">
      <div class="content">
        <h2>Log <span>In</span> </h2>
        <div class="forms">
          <p style="color:red;padding:20px;">
            <?php if ($message!='') echo $message;?>
          </p>
          <div class="user-input">
            <input name="uname" type="text" class="login-input" id="name" placeholder="Username">
            <i class="fas fa-user">
            </i>
          </div>
        </div>
        <div class="pass-input">
          <div class="user-input">
            <input name="pass" type="password" class="login-input" id="my-password" placeholder="Password">
            <span class="eye" onclick="myFunction()">
              <i id="hide-1" class="fas fa-eye-slash">
              </i>
              <i id="hide-2" class="fas fa-eye">
              </i>
            </span>
          </div>
        </div>
        <button class="login-btn" type="submit" name="submit">Sign In</button>
        <p class="new-account">Not a user? <a href="register.php">Sign Up Now</a></p>
        <br>
        <p class="f-pass">
          <a href="#">Forgot Password?</a>
        </p>
      </div>
    </div>
  </form>




  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
  </script>



</body>

</html>
<script>
function myFunction() {
  var x = document.getElementById("my-password");
  var y = document.getElementById("hide-1");
  var z = document.getElementById("hide-2");

  if (x.type === "password") {
    x.type = "text";
    y.style.display = "block";
    z.style.display = "none";
  } else {
    x.type = "password";
    y.style.display = "none";
    z.style.display = "block";
  }
}
</script>