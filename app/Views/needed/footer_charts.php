        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020 - <?php echo date('Y'); ?></strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 0.1
            </div>
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

        <!-- ChartJS -->
        <script src="<?php echo base_url('assets/plugins/chart.js/Chart.min.js');?>"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/dist/js/adminlte.js');?>"></script>

        <script>
            $(function () {
                /* ChartJS
                 * -------
                 * Here we will create a few charts using ChartJS
                 */

                var areaChartData = {
                    labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [
                        {
                            label               : 'Fiverr',
                            backgroundColor     : 'rgba(60,141,188,0.9)',
                            borderColor         : 'rgba(60,141,188,0.8)',
                            pointRadius          : false,
                            pointColor          : '#3b8bba',
                            pointStrokeColor    : 'rgba(60,141,188,1)',
                            pointHighlightFill  : '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            data                : [28, 48, 40, 19, 86, 27, 90]
                        },
                        {
                            label               : 'Direct Clients',
                            backgroundColor     : 'rgba(210, 214, 222, 1)',
                            borderColor         : 'rgba(210, 214, 222, 1)',
                            pointRadius         : false,
                            pointColor          : 'rgba(210, 214, 222, 1)',
                            pointStrokeColor    : '#c1c7d1',
                            pointHighlightFill  : '#fff',
                            pointHighlightStroke: 'rgba(220,220,220,1)',
                            data                : [65, 59, 80, 81, 56, 55, 40]
                        },
                    ]
                }

                var areaChartOptions = {
                    maintainAspectRatio : false,
                    responsive : true,
                    legend: {
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            gridLines : {
                                display : false,
                            }
                        }],
                        yAxes: [{
                            gridLines : {
                                display : false,
                            }
                        }]
                    }
                }

                //-------------
                //- BAR CHART -
                //-------------
                var barChartCanvas = $('#barChart').get(0).getContext('2d')
                var barChartData = $.extend(true, {}, areaChartData)
                var temp0 = areaChartData.datasets[0]
                var temp1 = areaChartData.datasets[1]
                barChartData.datasets[0] = temp1
                barChartData.datasets[1] = temp0

                var barChartOptions = {
                    responsive              : true,
                    maintainAspectRatio     : false,
                    datasetFill             : false
                }

                new Chart(barChartCanvas, {
                    type: 'bar',
                    data: barChartData,
                    options: barChartOptions
                })

                //---------------------
                //- STACKED BAR CHART -
                //---------------------
                var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
                var stackedBarChartData = $.extend(true, {}, barChartData)

                var stackedBarChartOptions = {
                    responsive              : true,
                    maintainAspectRatio     : false,
                    scales: {
                        xAxes: [{
                            stacked: true,
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    }
                }

                new Chart(stackedBarChartCanvas, {
                    type: 'bar',
                    data: stackedBarChartData,
                    options: stackedBarChartOptions
                })
            })
        </script>

    </body>
</html>
