<!-- Select2 -->
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/css/select2.min.css'); ?>">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Monthly Earning View</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Direct Clients</li>
                    </ol>
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
            <form>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Select Month</span>
                            <div class="form-group">
                                <select class="select2 select2-purple" required multiple="" data-placeholder="Select a Month" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Select Source</span>
                            <div class="form-group">
                                <select class="select2 select2-accessible" multiple required data-placeholder="Select the Source to use" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option>Fiverr</option>
                                    <option>Direct Client</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Select Year</span>
                            <div class="form-group">
                                <select class="select2 select2-accessible" disabled multiple data-placeholder="Select the Year" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option selected value="year_2023">2023</option>
                                    <option>2024</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Select Year</span>
                            <div class="form-group">
                                <button class="btn btn-block btn-primary">Search</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>


            <div class="card card-solid">
                <div class="card-body pb-0">
                    <div class="row">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                </div>
                <!-- /.card-footer -->
            </div>

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- /.footer -->