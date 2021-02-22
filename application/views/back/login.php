
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/style.css') ?>">

     <!-- JQuery -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>

    
</head>

<body>
    <div class="container-fluid">
            <!-- Data akan diproses dibawa ke router terlebih dahulu -->
            <?= form_open('ke_login/login'); ?>

                        <h1><span> Resepku </span> Blog</h1>

                            <?php if($this->session->flashdata('pesan') !== null): ?>
                                <div class="alert alert-danger">
                                    <?= $this->session->flashdata('pesan') ?>
                                </div>
                            <?php endif; ?>
                        
                            <input placeholder="Masukkan Username" name="username" type="text"/>
                            <input placeholder="Masukkan Password" name="password" type="password"/>
                            <p>Belum punya akun?<a href="<?= base_url('back/regis') ?>" style="color: blue;"> Daftar Sekarang</a></p>
                            <button class="btn">Log in</button>
                       
            <?= form_close(); ?>

    </div>
    

    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>" ></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/style.js') ?>" ></script>
</body>

</html>