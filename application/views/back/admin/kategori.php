<div class="container-fluid">
    <?php if($this->session->flashdata('kategori') !== null): ?>
            <div class="alert alert-info mt-5">
                <?= $this->session->flashdata('kategori') ?>
            </div>
    <?php endif; ?>
    <div class="row mt-5">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header text-center">
                Data Kategori
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($kategori as $query): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $query->nama ?></td>
                                <td>
                                    <a class="btn btn-warning" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editModal<?=$query->id_kategori?>" >Edit</a>
                                    <a class="btn btn-danger" href="<?= base_url('hapus/kategori/'.$query->id_kategori) ?>">Hapus</a>
                                </td>
                            </tr>
                            <!-- Modal -->
                                <div class="modal fade" id="editModal<?=$query->id_kategori?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <?= form_open('edit/kategori/'.$query->id_kategori); ?>

                                                <div class="form-group">
                                                <label>Nama Kategori</label>
                                                <input class="form-control" placeholder="Masukkan Nama Kategori" value="<?= $query->nama ?>" name="nama" type="text" required>
                                            
                                                </div>

                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                                        </div>
                                        <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card">
            <div class="card-header text-center">
                Tambah Kategori
            </div>
            <div class="card-body">
                <?= form_open('tambah/kategori'); ?>

                            <div class="form-group">
                            <label>Nama Kategori</label>
                            <input class="form-control" placeholder="Masukkan Nama Kategori" name="nama" type="text" required/>
                            <button class="klik"><i class="fa fa-plus"></i> Tambah</button>
                            </div>
                            
                <?= form_close(); ?>
            </div>
        </div>
    </div>

</div>