<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Writers</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Writers</li>
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
                    <h3 class="card-title">All Persons</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
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
                                <i class="far fa-calendar-check text-success"></i>
                                Monthly View
                            </th>
                            <th>
                                <i class="far fa-address-card text-success"></i>
                                Profile
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
                                <a href="<?php echo base_url('source/both/writer/writer1'); ?>">
                                    <div class="external-event bg-success">
                                        <i class="far fa-eye"></i>
                                        Simple View
                                    </div>
                                </a>
                            </td>
                            <td>
                                <div class="external-event bg-gradient-primary" data-toggle="modal" data-target="#modalProfile">
                                    <i class="far fa-eye"></i>
                                    View
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>1.</td>
                            <td>Writer 1</td>
                            <td>148, 500.00 KShs</td>
                            <td>40, 450.00 KShs</td>
                            <td>104, 000.00 KShs</td>
                            <td>
                                <a href="<?php echo base_url('source/both/writer/writer2'); ?>">
                                    <div class="external-event bg-success">
                                        <i class="far fa-eye"></i>
                                        Simple View
                                    </div>
                                </a>
                            </td>
                            <td>
                                <div class="external-event bg-gradient-primary" data-toggle="modal" data-target="#modalProfile">
                                    <i class="far fa-eye"></i>
                                    View
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modalProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">User Profile</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Profile Image -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-body box-profile">
                                                <div class="text-center">
                                                    <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                                                </div>
                                                <h3 class="profile-username text-center">{Name}</h3>
                                                <p class="text-muted text-center">{Username}</p>
                                                <ul class="list-group list-group-unbordered mb-3">
                                                    <li class="list-group-item">
                                                        <b>Joined</b> <a class="float-right">{Date()}</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Assignment Done</b> <a class="float-right">20</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Assignment Pending</b> <a class="float-right">4</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
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