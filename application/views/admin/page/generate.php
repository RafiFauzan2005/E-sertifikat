<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Generate Sertifikat</h1>
    <center>
        <?= $this->session->flashdata('message'); ?>
    </center>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" style="float: right;" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">Tambah Data</a>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/Dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Download Sertifikat</li>
            </ol>
        </div>
        <!-- Modal Tambah Generate -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="statiBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="user" method="post" action="<?= base_url('Admin/Generate_Sertifikat/TambahGenerate') ?>">
                            <label for="event_name">Sertifikat</label>
                            <select class="form-select" aria-label="Default select example" name="certificate_id">
                                <option selected>--Pilih Sertifikat--</option>
                                <?php foreach ($data_sertifikat as $sertifikat): ?>
                                    <option value="<?= $sertifikat->certificate_id ?>">
                                        <?= $sertifikat->event_name ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                            <br>
                            <label for="event_name">Nama Peserta</label>
                            <select class="form-select" aria-label="Default select example" name="user_id">
                                <option selected>--Pilih User--</option>
                                <?php foreach ($data_user as $user): ?>
                                    <option value="<?= $user->user_id ?>">
                                        <?= $user->full_name ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                            <br>
                            <label for="event_name">Nama Kegiatan</label>
                            <select class="form-select" aria-label="Default select example" name="event_id">
                                <option selected>--Pilih Event--</option>
                                <?php foreach ($data_event as $event): ?>
                                    <option value="<?= $event->event_id ?>">
                                        <?= $event->event_name ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                            <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: lightblue;">
                        <tr>
                            <th class="text-center">ID Generate</th>
                            <th class="text-center">ID Sertifikat</th>
                            <th class="text-center">ID User</th>
                            <th class="text-center">ID Kegiatan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($generate as $gnrt): ?>
                        <tr>
                            <td class="text-center">
                                <?php echo $gnrt->assignment_id ?>
                            </td>
                            <td class="text-center">
                                <?php echo $gnrt->certificate_id ?>
                            </td>
                            <td class="text-center">
                                <?php echo $gnrt->user_id ?>
                            </td>
                            <td class="text-center">
                                <?php echo $gnrt->event_id ?>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="<?php echo base_url('Admin/Generate_Sertifikat/pdf/' . $gnrt->assignment_id) ?>">Download</a>
                                |
                                <a class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrophapus<?= $gnrt->assignment_id ?>">Hapus</a>
                            </td>
                        <?php endforeach ?>
                        <!-- Modal Hapus Generate -->
                        <?php foreach ($generate as $gnrt): ?>
                            <div class="modal fade" id="staticBackdrophapus<?= $gnrt->assignment_id ?>"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">
                                                Apakah Anda Yakin?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php base_url('Admin/Generate_Sertifikat/HapusGenerate') ?>"
                                                method="post" name="hapus">
                                                <input type="hidden" value=" <?php echo $gnrt->assignment_id ?>"
                                                    name="event_id"></input>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-primary" data-bs-dismiss="modal">Batal</a>
                                            <a class="btn btn-danger"
                                                href="<?= base_url('Admin/Generate_Sertifikat/Hapusgenerate/' . $gnrt->assignment_id) ?>">Hapus</a>
                                        </div>
                                    </div>
                                    <?php echo form_close() ?>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <!-- end -->
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</div>