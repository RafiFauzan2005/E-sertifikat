<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit User</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit User</li>
            </ol>
        </div>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= base_url('Data_user/EditUser') ?>" method="post"
                                    class="forms-sample">
                                    <div class="form-group">    
                                        <label for="exampleInputUsername1" class="form-label">user Name</label>
                                        <input type="hidden" class="form-control" id="exampleInputUsername1"
                                            name="user_id" value="<?= $user->user_id ?>" placeholder="" readonly>
                                        <input type="text" class="form-control" id="exampleInputUsername1"
                                            name="username" value="<?= $user->username ?>"
                                            placeholder="">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1"
                                            name="full_name" value="<?= $user->full_name ?>"
                                            placeholder="">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1"
                                            name="email" value="<?= $user->email ?>" placeholder="">
                                    </div>
                                    <br>
                                    <!-- <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Status</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1"
                                            name="organizer" value="<?= $user->status ?>" placeholder="Organizer">
                                    </div> -->
                                    <br>
                                    <button type="submit" class="btn btn-success me-2">Edit</button>
                                    <button type="reset" class="btn btn-primary me-2">Reset</button>
                                    <a class="btn btn-danger" href="<?= base_url('Dashboard') ?>">Batal</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>