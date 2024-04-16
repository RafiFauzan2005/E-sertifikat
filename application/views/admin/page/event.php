<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Kegiatan</h1>
    <center>
        <?= $this->session->flashdata('message'); ?>
    </center>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" style="float: right;" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">Tambah Kegiatan</a>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/Dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Kegiatan</li>
            </ol>
        </div>
        <!-- Modal Tambah Event -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Kegiatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="user" method="post" action="<?= base_url('Admin/Event/TambahEvent') ?>">
                            <div class="form-group">
                                <label for="event_name">Nama Kegiatan</label>
                                <input type="text" class="form-control" placeholder="" name="event_name" required>
                            </div> 
                            <br>
                            <div class="form-group">
                                <label for="event_date">Tanggal Kegiatan</label>
                                <input type="date" class="form-control" name="event_date" placeholder="" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="location">Lokasi Kegiatan</label>
                                <input type="text" class="form-control" name="location" placeholder="" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="organizer">Penyelenggara Kegiatan</label>
                                <input type="text" class="form-control" name="organizer" placeholder="" required>
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
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: lightblue;">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Nama Kegiatan</th>
                            <th class="text-center">Tanggal Kegiatan</th>
                            <th class="text-center">Lokasi Kegiatan</th>
                            <th class="text-center">Penyelenggara Kegiatan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($data_event as $event): ?>
                        <tr>
                            <td class="text-center">
                                <?php echo $event->event_id ?>
                            </td>
                            <td>
                                <?php echo $event->event_name ?>
                            </td>
                            <td>
                                <?php echo $event->event_date ?>
                            </td>
                            <td>
                                <?php echo $event->location ?>
                            </td>
                            <td>
                                <?php echo $event->organizer ?>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-success" href="<?= base_url('Admin/Event/Edit_Event/' . $event->event_id) ?>">Edit</a>
                                <!-- <a class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdropedit<?= $event->event_id ?>">Edit</a> -->
                                |
                                <a class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrophapus<?= $event->event_id ?>">Hapus</a>
                            </td>
                        <?php endforeach ?>
                        <!-- Modal Edit Event -->
                        <?php  foreach ($data_event as $event) : ?>
                            <div class="modal fade" id="staticBackdropedit<?= $event->event_id ?>" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="user" method="post" action="<?= base_url('Admin/Event/EditEvent/ '.$event->event_id) ?>">
                                                <div class="form-group">
                                                    <label for="nama">Nama Kegiatan</label>
                                                    <input type="text" class="form-control" name="event_name"
                                                        value="<?= $event->event_name ?>" required>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="tgl_bayar">Tanggal Kegiatan</label>
                                                    <input type="date" class="form-control" name="event_date" placeholder=""
                                                        value="<?= $event->event_date ?>" required>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="bulan_dibayar">Lokasi Kegiatan</label>
                                                    <input type="text" class="form-control" name="location" placeholder=""
                                                        value="<?= $event->location ?>" required>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="tahun_dibayar">Penyelenggara Kegiatan</label>
                                                    <input type="text" class="form-control" name="organizer" placeholder=""
                                                        value="<?= $event->organizer ?>" required>
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
                        <?php foreach ($data_event as $event): ?>
                            <div class="modal fade" id="staticBackdrophapus<?= $event->event_id ?>"
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
                                            <form action="<?php base_url('Admin/Event/HapusEvent') ?>" method="post"
                                                name="hapus">
                                                <input type="hidden" value=" <?php echo $event->event_id ?>"
                                                    name="event_id"></input>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-primary" data-bs-dismiss="modal">Batal</a>
                                            <a class="btn btn-danger"
                                                href="<?= base_url('Admin/Event/HapusEvent/' . $event->event_id) ?>">Hapus</a>
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