<div class="container-fluid">
    <?php if($this->session->flashdata('pesan') !== null): ?>
            <div class="alert alert-info mt-5">
                <?= $this->session->flashdata('pesan') ?>
            </div>
    <?php endif; ?>
    <div class="row mt-5">
        <div class="col-md-8 container-fluid">
            <div class="card">
            <div class="card-header text-center">
                <?= $tambah->judul ?>
            </div>
            <div class="card-body ">

                <div class="form-group">
                    <center>
                        <img src="<?= base_url('assets/gambar/'.$tambah->gambar) ?>" class="img-fluid" width="800" height="400">
                    </center>
                </div>
                <hr>
                <div class="form-group">
                    <p><?= $tambah->deskripsi ?></p>
                </div>
                <hr>
                <div class="form-group">
                   <p>Tanggal Publish : <?= $tambah->tanggal?></p>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <p>Kategori : <?= $tambah->kategori ?></p>
                          
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                        <p>Waktu : <?= $tambah->kategori ?> Jam</p>
                            
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                        <p> Porsi: <?= $tambah->porsi ?> orang</p>
                            
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label>Bahan dan Langkah-Langkah</label>
                    <p><?= $tambah->cara ?></p>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 container-fluid">
                        <a href="<?= base_url('admin/tambah') ?>"><button type="submit" class="klik btn btn-danger  ">Kembali</button></a>
                   
                        
                    </div>
                </div>
                

            </div>
        </div>
    </div>
        


</div>