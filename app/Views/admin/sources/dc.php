<!-- Datatables -->
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/datatables.css');?>">
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
            <table class="table table-bordered table-hover table-striped" id="datatable_now">
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
                <?php
                    $counter = 0;
                    foreach ($entry_info as $entry) {
                        $counter ++;
                        $name = explode('-*-', $entry->ent_writer);
                        $url = base_url('source/both/writer/'.$name[1]);
                        echo '<tr>';
                            echo '<td> '.$counter.' </td >';
                            echo '<td> '.$name[0].' </td >';
                            echo '<td> '.$entry->ent_per_person_sum.' </td >';
                            echo '<td> '.$entry->ent_per_person_pay.' </td >';
                            echo '<td> '.$entry->ent_per_person_profit.' </td >';
                            echo '<td> '.$entry->ent_per_person.' Assignments </td >';
                            echo '<td><a href = "'.$url.'" class="btn btn-sm bg-success"> <i class="far fa-eye" ></i > Simple View </a> </td>';
                        echo '</tr>';
                    }
                ?>
                </tbody>
            </table>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- /.footer -->