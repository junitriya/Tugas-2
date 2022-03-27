<?php  

// Lampirkan dbconfig 

require_once "config-db.php"; 

// Cek status login user 

if($user->isLoggedIn()){ 

  header("location: home.php"); //Redirect ke index 

} 

//Cek adanya data yang dikirim 

if(isset($_POST['kirim'])){ 

  $nama = $_POST['nama']; 
  $nim = $_POST['nim']; 
  $password = $_POST['password']; 

  // Registrasi user baru 

  if($user->register($nama, $nim, $password)){ 

    // Jika berhasil set variable success ke true 

    $success = true; 

  }else{ 

    // Jika gagal, ambil pesan error 

    $error = $user->getLastError(); 

  } 

} 

?> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Pendaftaran Mahasiswa</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pendaftaran Mahasiswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </div>
</nav>
<br>
<br>
<br>
<main class="container">
  <div class="bg-light p-5 rounded">

  <form class="register-form" method="post"> 


<div>
    <h1 class="text-center">Register</h1>
</div>
  <div class="mb-3">
    <label for="exampleInputnim1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputnim1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputnim1" class="form-label">Email address</label>
    <input type="nim" name="nim" class="form-control" id="exampleInputnim1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
      <p class="message">Already registered? <a href="index.php">Sign In</a></p> 

  </div>
  <button type="submit" name="kirim" class="btn btn-primary">Submit</button>
</form>
<?php if (isset($error)): ?> 

<div class="error"> 

  <?php echo $error ?> 

</div> 

<?php endif; ?> 

<?php if (isset($success)): ?> 

    <div class="success"> 

Berhasil mendaftar. Silakan <a href="index.php">login</a>. 

</div>

<?php endif; ?> 
 
  </div>
</main>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
