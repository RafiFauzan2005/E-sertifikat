<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Verifikasi User</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/Dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Verifikasi User</li>
            </ol>
        </div>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <form class="user" method="post"
                                    action="<?= base_url('Admin/Verifikasi/Verifikasi_User/' . $data_user->user_id) ?>">
                                    <!-- <label for="verifikasi" class="form-label">Verifikasi</label>
                                <select class="form-select" aria-label="Default select example" name="participant_name">
                                <option selected></option>
                                    <option selected></option>
                                    <?php foreach ($data_user as $user): ?>
                                    <option value="<?= $user->status ?>">
                                        <?= $user->status ?>
                                    </option>
                                    <?php endforeach ?>
                                </select> -->
                                    <label for="status">Status:</label>
                                    <select id="status" name="status">
                                        <?php foreach ($enum_values as $value): ?>
                                            <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <a class="btn btn-danger" href="<?= base_url('Admin/Sertifikat') ?>">Batal</a>
                                    <button type="submit" class="btn btn-success">Verifikasi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>