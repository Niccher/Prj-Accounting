        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020 - <?php echo date('Y'); ?></strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 0.1
            </div>
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
        <!-- Select2 -->
        <script src="<?php echo base_url('assets/plugins/select2/js/select2.full.min.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/dist/js/adminlte.js');?>"></script>

        <script>
            $('.select2').select2()

            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        </script>

    </body>
</html>
