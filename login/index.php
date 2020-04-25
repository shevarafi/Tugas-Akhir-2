<?php
include 'cek_login.php'
?>

<html>
<head>
     <title>Login Covid-19</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/3.4.1/bootstrap.min.js"></script>
</head>
<body>
     <div class="container">
          <h2>Login</h2>
          <form>
               <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class ="form-control" id="username" placeholder="Masukkan Username">
               </div>
               <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class ="form-control" id="password" placeholder="Masukkan Password">
               </div>
               <button type="submit" class="btn btn-default" name="btnLogin">Login</button>
               <a href="about.php" class="btn btn-success">
                    <i class="fa fa-angle-double-left"></i>Tentang Saya</a>
               </form>
          </div>
     </body>
</html>