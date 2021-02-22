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
                Tambah Resep
            </div>
            <div class="card-body ">
                <?= form_open_multipart('ke_tambah/tambah'); ?>
                <div class="form-group">
                    <label>Nama Resep</label>
                    <input type="text" name="judul" placeholder="Masukkan Nama Resep" required class="form-control">
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" placeholder="Masukkan Nama Resep" required class="form-control" cols="100%">
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="kategori" class="form-control">
                                <option  value="">-------Pilih Kategori-------</option>
                                <?php foreach($kategori as $query): ?>
                                    <option value="<?= $query->id_kategori ?>"><?= $query->nama ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Waktu</label>
                            <input type="text" name="waktu" placeholder="Masukkan Waktu Pembuatan" required class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                   

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Porsi</label>
                            <input type="text" name="porsi" placeholder="Masukkan Nama Resep" required class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Bahan dan Langkah-Langkah</label>
                    <textarea name="cara" id="ckeditor" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 container-fluid">
                        <button type="reset" class="klik btn btn-danger  ">Reset Resep</button>
                    </div>
                    <div class="col-md-6 container-fluid">
                    <button type="submit" class="btn btn danger klik ">Simpan Resep</button>
                    </div>
                </div>
                

                <?= form_close() ?>
            </div>
        </div>
    </div>
        


</div>