<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Invoices</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Invoices</li>
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
        <div class="container-fluid"> </div>
        <!-- /.container-fluid -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Paid Invoices</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>
                                <i class="fas fa-user-tag text-success"></i>
                                Paid to:
                            </th>
                            <th>
                                <i class="fas fa-hand-holding-usd text-success"></i>
                                Amount Paid
                            </th>
                            <th>
                                <i class="fas fa-calendar-check text-success"></i>
                                Date
                            </th>
                            <th>
                                <i class="fas fa-certificate text-success"></i>
                                Method
                            </th>
                            <th>
                                <i class="fas fa-file-pdf text-success"></i>
                                Link To PDF Invoice
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Writer 1</td>
                                <td>4500.00 KShs</td>
                                <td>Dec 29 2:50:56</td>
                                <td>MPESA</td>
                                <td>
                                    <a href="<?php echo base_url('#');?>">
                                        <i class="fas fa-cloud-download-alt"></i>
                                        MPESA_date_here_personal_name.pdf
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>Writer 1</td>
                                <td>4500.00 KShs</td>
                                <td>Dec 29 2:50:56</td>
                                <td>MPESA</td>
                                <td>
                                    <a href="<?php echo base_url('#');?>">
                                        <i class="fas fa-cloud-download-alt"></i>
                                        MPESA_date_here_personal_name.pdf
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                </div>
            </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- /.footer -->