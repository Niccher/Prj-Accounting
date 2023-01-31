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
            <?php echo form_open('monthly/filter'); ?>
                <div class="row">

                    <div class="col-sm-4">
                        <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Select Month</span>
                            <div class="form-group">
                                <select class="select2 select2-purple" name="sel_month[]" required multiple="" data-placeholder="Select a Month" style="width: 100%;" tabindex="-1" aria-hidden="true">
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
                                <select class="select2 select2-accessible" name="sel_source[]" multiple required data-placeholder="Select the Source to use" style="width: 100%;" tabindex="-1" aria-hidden="true">
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
                                <select class="select2 select2-accessible" name="sel_year" disabled multiple data-placeholder="Select the Year" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option selected value="year_2023">2023</option>
                                    <option>2024</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Search</span>
                            <div class="form-group">
                                <button class="btn btn-block btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="card card-solid">
                <div class="card-body pb-0">
                    <div class="row">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>
                                        <i class="fas fa-user-tag text-success"></i>
                                        Full Name
                                    </th>

                                    <th>
                                        <i class="fas fa-chart-line text-success"></i>
                                        Totals
                                    </th>

                                    <th>
                                        <i class="fas fa-chart-area text-success"></i>
                                        Earned
                                    </th>

                                    <th>
                                        <i class="fas fa-chart-bar text-success"></i>
                                        Profit Brought
                                    </th>

                                    <th>
                                        <i class="fas fa-calendar-check text-success"></i>
                                        Assignment Done
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Writer 1</td>
                                    <td>148, 500.00 KShs</td>
                                    <td>40, 450.00 KShs</td>
                                    <td>104, 000.00 KShs</td>

                                    <td>
                                        7 Assignments
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.</td>
                                    <td>Writer 1</td>
                                    <td>148, 500.00 KShs</td>
                                    <td>40, 450.00 KShs</td>
                                    <td>104, 000.00 KShs</td>

                                    <td>
                                        14 Assignment
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer"></div>
                <!-- /.card-footer -->
            </div>

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- /.footer -->