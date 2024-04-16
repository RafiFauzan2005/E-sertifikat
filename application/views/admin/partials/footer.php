<footer>
    <div class="py-6 px-6 text-center">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Fauzan Rafi</span>
        </div>
    </div>
</footer>

<div class="modal fade" id="staticBackdroplogout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Apakah Anda Yakin?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <a href="<?php echo base_url('Login/Logout') ?>" class="btn btn-primary btn-user btn-block">
                    Logout
                </a>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
<script src="<?php echo base_url('assets/libs/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/sidebarmenu.js') ?>"></script>
<script src="<?php echo base_url('assets/js/app.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/apexcharts/dist/apexcharts.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/simplebar/dist/simplebar.js') ?>"></script>
<script src="<?php echo base_url('assets/js/dashboard.js') ?>"></script>
</body>

</html>