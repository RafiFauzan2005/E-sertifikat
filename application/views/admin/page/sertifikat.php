<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Sertifikat</h1>
    <center>
        <?= $this->session->flashdata('message'); ?>
    </center>
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" style="float: right;" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">Tambah Sertifikat</a>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/Dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Sertifikat</li>
            </ol>
        </div>
        <!-- Modal Tambah Event -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Sertifikat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="user" method="post" action="<?= base_url('Admin/Sertifikat/TambahSertifikat') ?>">
                            <label for="event_name" class="form-label">Nama Peserta</label>
                            <select class="form-select" aria-label="Default select example" name="participant_name">
                                <option selected>--Nama Peserta--</option>
                                <?php foreach ($data_user as $user): ?>
                                    <option value="<?= $user->full_name ?>">
                                        <?= $user->full_name ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                            <br>
                            <label for="event_name" class="form-label">Nama Kegiatan</label>
                            <select class="form-select" aria-label="Default select example" name="event_name">
                                <option selected>--Nama Kegiatan--</option>
                                <?php foreach ($data_event as $event): ?>
                                    <option value="<?= $event->event_name ?>">
                                        <?= $event->event_name ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                            <br>
                            <div class="form-group">
                                <label for="event_date" class="form-label">Tanggal Kegiatan</label>
                                <select class="form-select" aria-label="Default select example" name="event_date">
                                <option selected>--Tanggal Kegiatan--</option>
                                <?php foreach ($data_event as $event): ?>
                                    <option value="<?= $event->event_date ?>">
                                        <?= $event->event_date ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="certificate_text" class="form-label">Deskripsi Sertifikat</label>
                                <input type="text" class="form-control" name="certificate_text" placeholder="" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="position" class="form-label">Jabatan Penanda Tangan</label>
                                <input type="text" class="form-control" name="position" placeholder="" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="signed" class="form-label">Nama Penanda Tangan</label>
                                <input type="text" class="form-control" name="signed" placeholder="" required>
                            </div>
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
                            <th class="text-center">ID</th>
                            <th class="text-center">Nama Peserta</th>
                            <th class="text-center">Nama Kegiatan</th>
                            <th class="text-center">Tanggal Kegiatan</th>
                            <th class="text-center">Deskripsi Sertifikat</th>
                            <th class="text-center">Jabatan TTD</th>
                            <th class="text-center">Nama TTD</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($data_sertifikat as $sertifikat): ?>
                        <tr>
                            <td class="text-center">
                            <?php echo $sertifikat->certificate_id ?>
                            </td>
                            <td>
                                <?php echo $sertifikat->participant_name ?>
                            </td>
                            <td>
                                <?php echo $sertifikat->event_name ?>
                            </td>
                            <td>
                                <?php echo $sertifikat->event_date ?>
                            </td>
                            <td>
                                <?php echo $sertifikat->certificate_text ?>
                            </td>
                            <td>
                                <?php echo $sertifikat->position ?>
                            </td>
                            <td>
                                <?php echo $sertifikat->signed ?>
                            </td>
                            <td class="text-center">
                            <a class="btn btn-success" href="<?= base_url('Admin/Sertifikat/Edit_Sertifikat/' . $sertifikat->certificate_id) ?>">Edit</a>
                                <!-- <a class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdropedit<?= $sertifikat->certificate_id ?>">Edit</a> -->
                                
                                <a class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrophapus<?= $sertifikat->certificate_id ?>">Hapus</a>
                            </td>
                        <?php endforeach ?>
                        <!-- Modal Edit Event -->
                        <?php foreach ($data_sertifikat as $sertifikat): ?>
                            <div class="modal fade" id="staticBackdropedit<?= $sertifikat->certificate_id ?>"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="user" method="post"
                                                action="<?= base_url('Admin/Sertifikat/EditSertifikat/' . $sertifikat->certificate_id) ?>">
                                                <label for="participant_name">Nama Peserta</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="participant_name">
                                                    <option selected></option>
                                                    <?php foreach ($data_user as $user): ?>
                                                        <option value="<?= $user->full_name ?>">
                                                            <?= $user->full_name ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                                <br>
                                                <label for="event_name">Nama Kegiatan</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="event_name">
                                                    <option selected></option>
                                                    <?php foreach ($data_event as $event): ?>
                                                        <option value="<?= $event->event_name ?>">
                                                            <?= $event->event_name ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                                <br>
                                                <div class="form-group">
                                                    <label for="event_date">Tanggal Kegiatan</label>
                                                    <input type="date" class="form-control" name="event_date" placeholder="" value="<?= $sertifikat->event_date ?>"
                                                        required>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="certificate_text">Deskripsi Sertifikat</label>
                                                    <input type="text" class="form-control" name="certificate_text"
                                                        placeholder="" value="<?= $sertifikat->certificate_text ?>"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="position">Jabatan Penanda Tangan</label>
                                                    <input type="text" class="form-control" name="position" value=" <?php echo $sertifikat->position ?>" placeholder="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="signed">Nama Penanda Tangan</label>
                                                    <input type="text" class="form-control" name="signed" value=" <?php echo $sertifikat->signed ?>"placeholder="" required>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                                            <button type="submit" class="btn btn-success">Edit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <!-- End Modal -->
                        <!-- Modal Hapus Event -->
                        <?php foreach ($data_sertifikat as $sertifikat): ?>
                            <div class="modal fade" id="staticBackdrophapus<?= $sertifikat->certificate_id ?>"
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
                                            <form action="<?php base_url('Admin/Sertifikat/Hapus_Sertifikat') ?>" method="post"
                                                name="hapus">
                                                <input type="hidden" value=" <?php echo $sertifikat->certificate_id ?>"
                                                    name="event_id"></input>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-primary" data-bs-dismiss="modal">Batal</a>
                                            <a class="btn btn-danger"
                                                href="<?= base_url('Admin/Sertifikat/HapusSertifikat/' . $sertifikat->certificate_id) ?>">Hapus</a>
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