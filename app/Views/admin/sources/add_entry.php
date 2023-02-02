<!-- Select2 -->
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/css/select2.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css');?>">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add an entry </h1>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Work Type</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item active">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-clipboard"></i> Both Sources
                                        <span class="badge bg-gradient-primary float-right">12</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fab fa-fonticons-fi"></i> Source Fiverr
                                        <span class="badge bg-gradient-info float-right">6</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fab fa-dailymotion"></i> Source Direct Client
                                        <span class="badge bg-gradient-cyan float-right">8</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Add an entry</h3>
                            <div class="card-tools">
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-controls"> </div>
                            <div class="table-responsive mailbox-messages">
                                <div class="card card">
                                    <!-- form start -->
                                    <form class="form-horizontal">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="inp_1" class="col-sm-3 col-form-label">Assignment Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inp_1" name="inp_name" placeholder="Assignment Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inp_2" class="col-sm-3 col-form-label">Writer Assigned</label>
                                                <div class="col-sm-8">
                                                    <select class="custom-select" id="inp_2" name="inp_writer">
                                                        <option value="inp_writer_1">Writer 1</option>
                                                        <option value="inp_writer_2">Writer 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inp_3" class="col-sm-3 col-form-label">Assignment Price</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inp_3" name="inp_price" placeholder="Assignment Price">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inp_4" class="col-sm-3 col-form-label">Writer Paid</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inp_4" name="inp_paid" placeholder="Writer's Pay">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inp_5" class="col-sm-3 col-form-label">Assignment Source</label>
                                                <div class="col-sm-8">
                                                    <select class="custom-select" id="inp_5" name="inp_source">
                                                        <option value="source_fiverr">Source Fiverr</option>
                                                        <option value="source_dc">Source Direct Client</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <div class="col-6"></div>
                                            <div class="col-6 float-right">
                                                <div class="row">
                                                    <a href="#" class="btn btn-info btn-md col-5">
                                                        Add Entry
                                                    </a>
                                                    <div class="col-2"></div>
                                                    <a href="#" class="btn btn-primary btn-md col-5">
                                                        Reset
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /.card-footer -->
                                    </form>
                                </div>

                            </div>
                            <!-- /.mail-box-messages -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer p-0">
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- /.footer -->