    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
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
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-gray">
                            <div class="inner">
                                <h3>
                                    <?php
                                        echo number_to_currency($entry_banner->monies_all, 'KES', '', 1);
                                    ?>
                                </h3>
                                <p>All Earning</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <h3>
                                    <?php
                                        echo number_to_currency($entry_banner->monies_paid, 'KES', '', 1);
                                    ?>
                                </h3>
                                <p>Paid to Writers</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-gray" disabled="">
                            <div class="inner">
                                <h3>
                                    <?php
                                        echo number_to_currency($entry_banner->monies_profit, 'KES', '', 1);
                                    ?>
                                </h3>
                                <p>Profit Earning</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <!-- BAR CHART -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Fiverr vs Direct Client Earning Chart</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 583px;" class="chartjs-render-monitor" width="583" height="250"></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <div class="col-md-6">
                        <!-- STACKED BAR CHART -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Total Earned</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 583px;" class="chartjs-render-monitor" width="583" height="250"></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Top Writers</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
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
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $counter = 0;
                                            foreach ($user_work as $entry) {
                                                $counter ++;
                                                $url = base_url('source/both/writer/writer2');
                                                echo '<tr>';
                                                    echo '<td> '.$counter.' </td >';
                                                    echo '<td> '.$entry->ent_writer.' </td >';
                                                    echo '<td> '.$entry->ent_per_person_sum.' </td >';
                                                    echo '<td> '.$entry->ent_per_person_pay.' </td >';
                                                    echo '<td> '.$entry->ent_per_person_profit.' </td >';
                                                echo '</tr>';
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
                <!-- /.row (main row) -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- /.footer -->