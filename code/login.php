<?php
session_start();


if (isset($_SESSION['a'])){
	header("location:inbox.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login Form</title>
    <style type="text/css">
      html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>
  </head>
    <body class="text-center" data-new-gr-c-s-check-loaded="14.1050.0" data-gr-ext-installed="">
    
<main class="form-signin" style="user-select: auto;">

	<?php if( isset($_GET['error']) ){
		echo "Email address already exists";
	}?>		
  <form action="loginb.php" style="user-select: auto;">
   
    <h1 class="h3 mb-3 fw-normal" style="user-select: auto;">Sign in</h1>

    <div class="form-floating">
      <input type="email" name="Email" class="form-control" id="floatingInput" placeholder="name@example.com" >
      <label for="floatingInput" >Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword" >Password</label>
    </div>
    <?php if( isset($_GET['pas']) ){
		echo "wrong password";
	}?>	

    <div class="checkbox mb-3" style="user-select: auto;">
      <label style="user-select: auto;">
        <input type="checkbox" value="remember-me" style="user-select: auto;"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" style="">Sign in</button>
    <p>New User <a href="register.php">Sign Up?</a></p>
    <p class="mt-5 mb-3 text-muted" style="user-select: auto;">© 2021–2022</p>
  </form>
</main>


    
  

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Noto+Sans+JP:400,500,700|Noto+Sans+KR:400,500,700|Roboto:400,500,700&amp;display=swap" rel="stylesheet" style="user-select: auto;"><div class="liner-scroll-points-container" style="user-select: auto;"></div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>