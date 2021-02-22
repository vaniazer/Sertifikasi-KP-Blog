
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title>
     <!-- Icon -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- Bootstrap -->
     <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
     <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/own.css') ?>">

     <!-- Datatables -->
     <link rel="stylesheet" href="<?= base_url('assets/vendor/datatables/datatables.min.css') ?>">
     
    <!-- JQuery -->
   <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>



</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?= base_url('lihat/front') ?>">Resepku Blog</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('lihat/front') ?>">
            <i class="fa fa-home"></i>
            Home <span class="sr-only">(current)</span>
          </a>
        </li>

      </ul>
      <span class="navbar-text">
        <a href="<?=  base_url('login_admin')?>" class="text-success"><i class="fa fa-power-off"></i> Login</a>
      </span>
      
    </div>
  </div>
</nav>
