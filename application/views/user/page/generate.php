<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Generate Sertifikat</h1>
    <center>
        <?= $this->session->flashdata('message'); ?>
    </center>
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Download Sertifikat</li>
            </ol>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: lightblue;">
                        <tr>
                            <th class="text-center">ID Generate</th>
                            <th class="text-center">ID Sertifikat</th>
                            <th class="text-center">ID User</th>
                            <th class="text-center">ID Kegiatan</th>
                            <th class="text-center">Download Sertifikat</th>
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
                                <a class="btn btn-warning" href="<?= base_url('Generate_Sertifikat/pdf/' . $gnrt->assignment_id) ?>">Download</a>
                            </td>
                        <?php endforeach ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</div>