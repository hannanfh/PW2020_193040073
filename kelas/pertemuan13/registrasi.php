<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
    alert('User baru telah ditambahkan, silahkan login');
    document.location.href = 'login.php';
    </script>";
  } else {
    echo 'user gagal ditambahkan!';
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Registrasi</title>
  <style>
    body {
      background-color: aquamarine;
    }

    .container1 {
      margin-left: 20%;
    }
  </style>
</head>

<body>
  <!-- navbar -->
  <!-- Just an image -->
  <nav class="navbar navbar-light bg-dark">
    <a class="navbar-brand" href="#">
      <img src="" width="30" height="30" alt="">
    </a>
  </nav>
  <!-- akhir nav -->
  <!-- Card -->
  <br> <br> <br>
  <div class="container1">
    <div class="card mt-5" style="max-width: 840px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="img/reg.png" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <?php if (isset($login['error'])) : ?>
              <p><?= $login['pesan']; ?></p>
            <?php endif; ?>
            <form action="" method="POST">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" autofocus aria-autocomplete="off" required class="form-control">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password1" class="form-control">
              </div>
              <div class="form-group">
                <label>Konfirmasi password</label>
                <input type="password" name="password2" class="form-control">
              </div>
              <button type="submit" name="registrasi">Registrasi!</button>

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