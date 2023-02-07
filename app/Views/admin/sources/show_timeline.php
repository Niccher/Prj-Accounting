<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Work Flow for <a href="#"><?php echo ucwords($profile[0]->Name); ?></a> </h1>
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
                            <i class="fas fa-tags text-success"></i>
                            Assignment Name
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
                            <i class="fas fa-calendar text-success"></i>
                            Month
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $counter = 0;
                        foreach ($assignments as $entry) {
                            $dt = explode(' ',$entry->ent_date);
                            $month = date( 'M', strtotime($dt[0]));
                            $counter ++;
                            echo '<tr>';
                                echo '<td> '.$counter.' </td >';
                                echo '<td> '.$entry->ent_name.' </td >';
                                echo '<td> '.$entry->ent_price.' </td >';
                                echo '<td> '.$entry->ent_writer_pay.' </td >';
                                echo '<td> '.$entry->ent_profit.' </td >';
                                echo '<td> '.$month.' </td >';
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