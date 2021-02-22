<div class="container-fluid">
    <?php if($this->session->flashdata('resep') !== null): ?>
            <div class="alert alert-info mt-5">
                <?= $this->session->flashdata('resep') ?>
            </div>
    <?php endif; ?>
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header text-center">
                Data Resep
            </div>
            <div class="card-body">
                <a href="<?= base_url('admin/tambah_resep') ?>" class="klik btn btn-primary">Tambah Resep</a>
                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>No</ th>
                                <th>Nama Resep</th>
                                <th>Kategori</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Porsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($tambah as $rep): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $rep->judul ?></td>
                                <td><?= $rep->nama ?></td>
                                <td><?= $rep->tanggal ?></td>
                                <td><?= $rep->waktu ?></td>
                                <td><?= $rep->porsi ?></td>
                                <td>
                                    <a href="<?= base_url('lihat/tambah/'.$rep->ID_RESEP) ?>" class="btn btn-success" href="javascript:void(0)" >Lihat</a>
                                    <a href="<?= base_url('edit/tambah/'.$rep->ID_RESEP) ?>" class="btn btn-warning" href="javascript:void(0)" >Edit</a>
                                    <a class="btn btn-danger" href="<?= base_url('hapus/tambah/'.$rep->ID_RESEP) ?>">Hapus</a>
                                </td>
                            </tr>
                            <!-- Modal -->

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        


</div>