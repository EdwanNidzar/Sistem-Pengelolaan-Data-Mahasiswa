<!doctype html>
<html lang="en"> 

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
  <link rel="shortcut icon" href="<?= base_url('assets/favicon.ico') ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/signin.css') ?>">

  <title>Login</title>
</head>

<body class="text-center">

  <main class="form-signin">
    <form method="POST" action="<?= base_url('login/action'); ?>">

      <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>

      <div class="form-floating">
        <input type="text" name="user" class="form-control" id="floatingInput" placeholder="Masukan Username">
        <label for="floatingInput">Masukan Username</label>
      </div>
      <div class="form-floating">
        <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Masukan Password</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
      <p class="mt-5 mb-3 text-muted">Edwan Nidzar &copy; 2023</p>
    </form>
  </main>



</body>

</html>