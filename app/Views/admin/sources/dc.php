<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Direct Clients</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="<?php echo base_url('source/add_entry'); ?>">
                            <div class="external-event bg-gradient-secondary">
                                <i class="fas fa-plus-square"></i>
                                Add a record
                            </div>
                        </a>
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
                        <th>
                            <i class="fas fa-list-ul text-success"></i>
                            View
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
                        <td>
                            <a href="<?php echo base_url('source/timeline'); ?>">
                                <div class="external-event bg-success">
                                    <i class="far fa-eye"></i>
                                    Simple View
                                </div>
                            </a>
                        </td>
                    </tr>

                <tr>
                    <td>2.</td>
                    <td>Writer 2</td>
                    <td>148, 500.00 KShs</td>
                    <td>40, 450.00 KShs</td>
                    <td>104, 000.00 KShs</td>
                    <td>
                        14 Assignments
                    </td>
                    <td>
                        <a href="<?php echo base_url('source/timeline'); ?>">
                            <div class="external-event bg-success">
                                <i class="far fa-eye"></i>
                                Simple View
                            </div>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- /.footer -->