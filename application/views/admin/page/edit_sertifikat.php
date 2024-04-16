<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Sertifikat</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/Dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Sertifikat</li>
            </ol>
        </div>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <form class="user" method="post" action="<?= base_url('Admin/Sertifikat/EditSertifikat/' . $data_sertifikat->certificate_id) ?>">
                                <label for="participant_name">Nama Peserta</label>
                                <select class="form-select" aria-label="Default select example" name="participant_name">
                                    <option selected></option>
                                    <?php foreach ($data_user as $user): ?>
                                    <option value="<?= $user->full_name ?>">
                                        <?= $user->full_name ?>
                                    </option>
                                    <?php endforeach ?>
                                </select>
                                <br>
                                <label for="event_name">Nama Kegiatan</label>
                                <select class="form-select" aria-label="Default select example" name="event_name">
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
                                    <input type="date" class="form-control" name="event_date" placeholder="" value="<?= $data_sertifikat->event_date ?>" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="certificate_text">Deskripsi Sertifikat</label>
                                    <input type="text" class="form-control" name="certificate_text" placeholder="" value="<?= $data_sertifikat->certificate_text ?>" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="position">Jabatan Penanda Tangan</label>
                                    <input type="text" class="form-control" name="position" value=" <?php echo $data_sertifikat->position ?>" placeholder="" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="signed">Nama Penanda Tangan</label>
                                    <input type="text" class="form-control" name="signed" value=" <?php echo $data_sertifikat->signed ?>"placeholder="" required>
                                </div>
                                <br>
                                <a class="btn btn-danger" href="<?= base_url('Admin/Sertifikat') ?>">Batal</a>
                                <button type="submit" class="btn btn-success">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>