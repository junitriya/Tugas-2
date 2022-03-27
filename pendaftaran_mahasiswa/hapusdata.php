
<?php  
   // Lampirkan dbconfig 
   require_once "config-db.php"; 
   // Cek status login user 
   if(!$user->isLoggedIn()){ 
     header("location: index.php"); //Redirect ke halaman login 
   } 
   // Ambil data user saat ini 
   $currentUser = $user->getUser(); 

   if (isset($_POST['btn-del'])) {
    $id = $_GET['delete_id'];
    $brg->deleteData($id);
    header("Location: hapusbarang.php?deleted");
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
    <title>Penjualan Alat Tulis</title>

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
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="indexdata.php">Pengelolaan Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="indexmahasiswa.php">Pengelolaan Mahasiswa</a>
        </li>
      </ul>
      <div class="d-flex">
        <a href="logout.php"><button class="btn btn-outline-danger">Logout</button></a>
      </div>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<main class="container">
  <div class="bg-light p-5 rounded text-center">
  <div class="panel panel-primary">
         <h1 class="panel-heading">Halaman Hapus Data</h1>
         <div class="panel-body">
             <?php
                if (isset($_GET['deleted'])) {
                    ?>
                 <div class="alert alert-success">
                     <strong>Info!</strong> Data berhasil dihapus...
                 </div>
             <?php
                } else {
                    ?>
                 <div class="alert alert-danger">
                     <strong>Warning!</strong> apa anda yakin ingin menghapusnya ?
                 </div>
             <?php
                }
                ?>
         </div>
         <div class="container">
             <?php
                if (isset($_GET['delete_id'])) {
                    $id = $_GET['delete_id']; ?>

                 <table class='table table-bordered'>
                     <tr>
                         <th>#</th>
                         <th>Nama</th>
                         <th>Nim</th>
                         <th>id</th>
                     </tr>

                     <?php
                        extract($brg->getID($id)); ?>
                     <tr>
                         <td><?php echo $id; ?></td>
                         <td><?php echo $nama; ?></td>
                         <td><?php echo $tanggal; ?></td>
                         <td><?php echo $lahir; ?></td>
                     </tr>
                 </table>
             <?php
                }
                ?>

         </div>
         <div class="container">
             <p>
                 <?php
                    if (isset($id)) {
                        ?>
             <form method="post">
                 <input type="hidden" name="id" value="<?php echo $id; ?>" />
                 <button class="btn btn-sm btn-primary" type="submit" name="btn-del">Ya</button>
                 <a href="indexbarang.php" class="btn btn-sm btn-success">Tidak</a>
             </form>
         <?php
                    } else {
                        ?>
             <a href="indexbarang.php" class="btn btn-sm btn-success">Back to index</a>
         <?php
                    }
            ?>
         </p>
         </div>
     </div>
     <!--End: Panel-body-->
 </div>
  </div>
</main>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
