<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Hugo 0.112.5">
  <title>LOGIN Multi User</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
  <link rel="stylesheet" href="style.css">





  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/sign-in.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">


  <main class="form-signin w-250 mx-auto">
    <form action="cek_login.php" method="post">
      <!-- <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
      <h1 class="h3 mb-3 fw-normal text-center fw-bold fs-3 text-warning">PT Mobat Mabit Golet Duit</h1>


      <div class="form-floating mb-3">
        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>

      <div class="form-floating mb-3">
        <select class="form-control" name="level" id="level">
          <option value="Pegawai">Pegawai</option>
          <option value="Operator">Operator</option>
          <option value="Administrator">Administrator</option>
        </select>
      </div>



      <!-- <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label>
      </div> -->
      <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Sign in</button>
      <a href="konfirmasi_ubah_pw.php">
        <p class="text-end">Ganti password</p>
      </a>
      <p class="mt-5 mb-3 text-body-secondary">&copy; Wihartoko 2023 – <?= date('Y') ?></p>
    </form>
  </main>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>