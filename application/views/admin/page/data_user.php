<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data User</h1>
    <center>
        <?= $this->session->flashdata('message'); ?>
    </center>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/Dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Data User</li>
            </ol>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: lightblue;">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Nama Lengkap</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Create At</th>
                            <!-- <th class="text-center">Status</th> -->
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($data_user as $user): ?>
                        <tr>
                            <td class="text-center">
                                <?php echo $user->user_id ?>
                            </td>
                            <td>
                                <?php echo $user->username ?>
                            </td>
                            <td>
                                <?php echo $user->full_name ?>
                            </td>
                            <td>
                                <?php echo $user->email ?>
                            </td>
                            <td>
                                <?php echo $user->created_at ?>
                            </td>
                            <!-- <td>
                                <?php echo $user->status ?>
                            </td> -->
                            <td class="text-center">
                                <a class="btn btn-success" href="<?= base_url('Admin/Data_user/Edit_user/' . $user->user_id) ?>">Edit</a>
                                <a class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrophapus<?= $user->user_id ?>">Hapus</a>
                            </td>
                        <?php endforeach ?>
                        <?php foreach ($data_user as $user): ?>
                            <div class="modal fade" id="staticBackdrophapus<?= $user->user_id ?>"
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
                                            <form action="<?php base_url('Admin/Data_user/HapusUser') ?>" method="post"
                                                name="hapus">
                                                <input type="hidden" value=" <?php echo $user->user_id ?>"
                                                    name="user_id"></input>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-primary" data-bs-dismiss="modal">Batal</a>
                                            <a class="btn btn-danger"
                                                href="<?= base_url('Admin/Data_user/HapusUser/' . $user->user_id) ?>">Hapus</a>
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