<?php
  require_once('scripts/login.php');   
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Signin FSButtler</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- JS Script -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/signin-style.css" rel="stylesheet">
  </head>

  <body class="text-center" id="signin">
    <form class="form-signin" action="" method="post">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputUsername" class="sr-only">Username</label>
      <input name = "username" type="text" id="inputText" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input name = "password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" /> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" value="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018 Marco Boßmann, all rights reserved</p>
    </form>
    <?php
        error_reporting(E_ALL);
      ini_set('display_errors', 1);
    ?>
  </body>
</html>
