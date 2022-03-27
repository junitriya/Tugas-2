
<?php  

// Lampirkan dbconfig 

require_once "config-db.php"; 

// Cek status login user 

if(!$user->isLoggedIn()){ 

  header("location: index.php"); //Redirect ke halaman login 

} 

// Ambil data user saat ini 

$currentUser = $user->getUser(); 

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
 <div class="collapse navbar-collapse" id="navbarCollapse">
   <ul class="navbar-nav me-auto mb-2 mb-md-0">
     <li class="nav-item">
       <a class="nav-link active" aria-current="page" href="indexbarang.php">Pengelolaan Data Mahasiswa</a>
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
<div class="bg-light p-5 rounded">
<div class="panel panel-primary">

<h1 class="text-center">Data Mahasiswa</h1>

<div class="panel-body">
 <a href="adddata.php" class="btn btn-secondary btn-sm">Tambah Data</a>
 <br><br>
 <table class='table table-bordered table-responsive text-center'>
     <tr>
         <th>ID Mahasiswa</th>
         <th>Nama</th>
         <th>Nim</th>
         <th>TTL</th>
         <th colspan="2" align="center">Actions</th>
     </tr>

     <?php
        $query = "SELECT * FROM tbl_data";
        $records_per_page = 5;
        $newquery = $brg->paging($query, $records_per_page);
        $brg->viewData($newquery);
        ?>

     <tr>
         <td colspan="7" align="center">
             <div class="pagination-wrap">
                 <?php $brg->paginglink($query, $records_per_page); ?>
             </div>
         </td>
     </tr>
 </table>

 <a href="cetak.php" target="_blank" class="btn btn-primary btn-sm">CETAK</a>
</div>
<!--End: Panel-body-->

</div>

</div>
</main>


 <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

   
</body>
</html>
