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
                        <?php
                            $counter = 0;
                            foreach ($user_work as $entry) {
                                $counter ++;
                                $name = explode('-*-', $entry->ent_writer);
                                $url = base_url('source/both/writer/'.$name[1]);
                                echo '<tr>';
                                    echo '<td> '.$counter.' </td >';
                                    echo '<td> '.$name[0].' </td >';
                                    echo '<td> '.$entry->ent_per_person_sum.' </td >';
                                    echo '<td> '.$entry->ent_per_person_pay.' </td >';
                                    echo '<td> '.$entry->ent_per_person_profit.' </td >';
                                    echo '<td><a href="'.$url.'"><div class="external-event bg-success"><i class="far fa-eye"></i>Simple View</div></a></td>';
                                    echo '<td><div class="external-event bg-gradient-primary" data-toggle="modal" data-target="#modalProfile_'.$name[1].'"><i class="far fa-eye"></i>View</div></td>';
                                echo '</tr>';
                            }
                        ?>
                        </tbody>
                    </table>
                </div>

                <!-- Modal -->
                <?php
                    $counter = 0;
                    foreach ($user_profiles as $user) {
                        $counter ++;
                        if ($counter == 1){
                            ?>
                            <div class="modal fade" id="modalProfile_<?php echo $user->Id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <h3 class="profile-username text-center"><?php echo ucwords($user->Name); ?></h3>
                                                            <p class="text-muted text-center"><?php echo ucwords($user->Username); ?></p>
                                                            <p class="text-muted text-center"><?php echo ucwords($user->Phone);?></p>
                                                            <ul class="list-group list-group-unbordered mb-3">
                                                                <li class="list-group-item">
                                                                    <b>Joined</b> <a class="float-right"><?php echo ucwords($user->Dates); ?></a>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <b>Sex</b> <a class="float-right"><?php echo ucwords($user->Sex); ?></a>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <b>Bio Comment</b> <a class="float-right"><?php echo ucwords($user->Comment); ?></a>
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
                            <?php
                        }else{
                            ?>
                            <div class="modal fade" id="modalProfile_<?php echo $user[0]->Id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <h3 class="profile-username text-center"><?php echo ucwords($user[0]->Name);?></h3>
                                                            <p class="text-muted text-center"><?php echo ucwords($user[0]->Username);?></p>
                                                            <p class="text-muted text-center"><?php echo ucwords($user[0]->Phone);?></p>
                                                            <ul class="list-group list-group-unbordered mb-3">
                                                                <li class="list-group-item">
                                                                    <b>Joined</b> <a class="float-right"><?php echo ucwords($user[0]->Dates);?></a>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <b>Sex</b> <a class="float-right"><?php echo ucwords($user[0]->Sex);?></a>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <b>Bio Comment</b> <a class="float-right"><?php echo ucwords($user[0]->Comment);?></a>
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
                            <?php
                        }
                    }
                ?>

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