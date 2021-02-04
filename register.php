<?php
  include 'auth/connection.php';

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/register.css">
  <title>Registration form</title>
</head>

<body>

  <div class="container">
    <form class="row g-3" method="post" action="register.php" enctype="multipart/form-data">

      <h1 class="text-center mt-4">Registration Form</h1>
      <hr>
      <div class="col-md-12">
        <label for="name" class="form-label">Your Name<span>*</span></label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Enter Your Name" required>
      </div>
      <div class="col-md-12">
        <label for="uname" class="form-label">Your Username<span>*</span></label>
        <input name="uname" type="text" class="form-control" id="uname" placeholder="Enter Your Username" required>
      </div>
      <div class="col-md-12">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="text" class="form-control" class="form-control" id="email"
          placeholder="Enter Your Email">
      </div>
      <div class="col-md-6">
        <label for="password" class="form-label">Password<span>*</span></label>
        <input name="password" placeholder="Enter Your Password" type="password" class="form-control" id="password"
          required>
      </div>
      <div class="col-md-6">
        <label for="password" class="form-label"> Repeat Password<span>*</span></label>
        <input name="re-password" placeholder="Confirm Your Password" type="password" class="form-control"
          id="re-password" required>
      </div>
      <div class="col-12">
        <p> <span>***</span> By creating an account you
          agree to our terms and conditions ...</p>
      </div>
      <div class="col-12">
        <input type="submit" class="btn btn-primary" value="submit">
      </div>
      <div class="col-12">
        <p>Already have an account? <a href="login.php">Sign in</a></p>
      </div>
    </form>
  </div>





  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
  </script>

</body>

</html>