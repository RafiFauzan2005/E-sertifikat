<div class="container-fluid">
  <div class="col-lg-">
    <div class="card text-center" style="width: rem;">
      <div class="card-body">
        <h4 class="card-title">Selamat Datang <?= $user['full_name']; ?></h4>
        <h5 class="card-text"><?= $user['email']; ?></h5>
        <br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead style=" background-color: lightblue;">
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Sertifikat</th>
              <th class="text-center">Download Disini</th>
            </tr>
          </thead>
          <?php
          $no = 1;
          foreach ($data_sertifikat as $sertifikat): ?>
            <tr>
              <td class="text-center">
                <?php echo $no++  ?>
              </td>
              <td class="text-center">
                <?php echo $sertifikat->event_name ?>
              </td>
            <?php endforeach ?>
            <?php
            foreach ($generate as $gnrt): ?>
              <td class="text-center">
                <a class="btn btn-warning"
                  href="<?php echo base_url('Admin/Generate_Sertifikat/pdf/' . $gnrt->assignment_id) ?>" target="_blank">Download</a>
              </td>
            <?php endforeach ?>
          </tr>
        </table>

        <!-- <?php
        foreach ($generate as $gnrt): ?>
            <td class="text-center">
              <a class="btn btn-warning"
                href="<?= base_url('Generate_Sertifikat/pdf/' . $gnrt->assignment_id) ?>">Download Sertifikat</a>
            </td>
          <?php endforeach ?> -->
      </div>
    </div>
  </div>
</div>