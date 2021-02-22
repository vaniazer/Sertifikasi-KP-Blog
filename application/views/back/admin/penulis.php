<div class="container-fluid">
    <?php if($this->session->flashdata('pesan') !== null): ?>
            <div class="alert alert-info mt-5">
                <?= $this->session->flashdata('pesan') ?>
            </div>
    <?php endif; ?>
    <div class="row mt-5 ">
        <div class="col-md-8 container-fluid">
            <div class="card">
                <div class="card-header text-center">
                    Data Penulis
                </div>
                <div class="card-body">
                    
                        <div class="row">
                            <div class="col-sm-3">
                            <h6 class="mb-0">Nama Lengkap</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            Vania Zerlinda
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            vaniazerlinda19@gmail.com
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                            <h6 class="mb-0">Nim</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            123180086
                            </div>
                        </div>
                        <hr>
                            
                </div>
            </div>
        </div>
        
        
    </div>


</div>