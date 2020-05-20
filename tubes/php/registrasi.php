<?php
require 'functions.php';
if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
    alert('Registrasi Berhasil ');
    document.location.href = 'login.php';
     </script>";
  } else {
    echo "<script>
    alert('Registrasi Gagal ');
    document.location.href = 'login.php';
     </script>";
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Registrasi</title>
  <style>
    .container1 {
      margin-left: 20%;
    }

    body {
      background-color: aquamarine;
    }
  </style>
</head>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-light bg-dark">
    <img class="img" src="../assets/img/logo.png">
    <p class="p1">RAMEDIA.COM</p>
    <div class="container search">
      <P>.</P>
      <form class="form-inline" method="POST">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari buku.." aria-label="Search" type="text" name="keyword" autocomplete="off" autofocus>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Cari</button>
      </form>
    </div>
  </nav>
  <!-- akhir navbar -->

  <br> <br> <br>
  <div class="container1">
    <div class="card mt-5" style="max-width: 840px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="../assets/img/reg.jpg" class="card-img">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <form action="" method="POST">
              <table>
                <tr>
                  <td><label for="username">Username</label></td>
                  <td>:</td>
                  <td><input type="text" name="username"></td>
                </tr>
                <tr>
                  <td><label for="password">Password</label></td>
                  <td>:</td>
                  <td><input type="password" name="password"></td>
                </tr>
              </table>
              <button type="submit" name="register">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir card -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>