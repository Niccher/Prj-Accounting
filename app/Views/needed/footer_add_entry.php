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
        <!-- Moment -->
        <script src="<?php echo base_url('assets/plugins/moment/moment.min.js');?>"></script>

        <script src="<?php echo base_url('assets/plugins/datetimepicker/bootstrap-datetimepicker.min.js');?>"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/dist/js/adminlte.js');?>"></script>

        <!-- Page specific script -->
        <script>
            $(function () {
                //Initialize Select2 Elements
                $('#inp_2').select2({
                    theme: 'bootstrap4'//Writers list
                })
                $('#inp_5').select2({
                    theme: 'bootstrap4'//Sources List
                })
                $('#inp_51').select2({
                    theme: 'bootstrap4'//Status
                })

                $('#inp_create_date').datetimepicker({
                    format: 'YYYY-MM-DD'
                });
            })
        </script>

    </body>
</html>
