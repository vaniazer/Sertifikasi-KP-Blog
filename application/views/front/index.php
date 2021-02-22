<div class="container-fluid">
    <div class="row">
        <div class="row mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body bg-success">
                            <h1 class="text-center text-white" style="font-size:50px"><?= $jumlah_resep?></h1>
                        </div>
                        <div class="card-footer text-center font-weight-bold">
                            Jumlah Resep
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body bg-info">
                            <h1 class="text-center text-white" style="font-size:50px"><?= $jumlah_kategori ?></h1>
                        </div>
                        <div class="card-footer text-center font-weight-bold">
                            Jumlah Kategori
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header text-center">
                    Data Resep
                </div>
                <div class="card-body">
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
                                        <a href="<?= base_url('lihat_front/tambah/'.$rep->ID_RESEP) ?>" class="btn btn-success" href="javascript:void(0)" >Lihat</a>
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
    
</div>