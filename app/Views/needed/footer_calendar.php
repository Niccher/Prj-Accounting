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
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/dist/js/adminlte.js');?>"></script>
        <script src="<?php echo base_url('assets/plugins/moment/moment.min.js');?>"></script>
        <!-- fullCalendar 2.2.5 -->
        <script src="<?php echo base_url('assets/plugins/fullcalendar/main.js');?>"></script>
        <!-- overlayScrollbars -->
        <script src="<?php echo base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');?>"></script>

        <script>
            $(function () {

                /* initialize the external events
                 -----------------------------------------------------------------*/
                function ini_events(ele) {
                    ele.each(function () {
                        var eventObject = {
                            title: $.trim($(this).text()) // use the element's text as the event title
                        }

                        // store the Event Object in the DOM element so we can get to it later
                        $(this).data('eventObject', eventObject)

                        // make the event draggable using jQuery UI
                        $(this).draggable({
                            zIndex        : 1070,
                            revert        : true, // will cause the event to go back to its
                            revertDuration: 0  //  original position after the drag
                        })

                    })
                }

                ini_events($('#external-events div.external-event'))

                /* initialize the calendar
                 -----------------------------------------------------------------*/
                //Date for the calendar events (dummy data)
                var date = new Date()
                var d    = date.getDate(),
                    m    = date.getMonth(),
                    y    = date.getFullYear()

                var Calendar = FullCalendar.Calendar;
                var Draggable = FullCalendar.Draggable;

                var containerEl = document.getElementById('external-events');
                var checkbox = document.getElementById('drop-remove');
                var calendarEl = document.getElementById('calendar');

                // initialize the external events
                // -----------------------------------------------------------------

                var calendar = new Calendar(calendarEl, {
                    headerToolbar: {
                        left  : 'prev,next today',
                        center: 'title',
                        right : 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    themeSystem: 'bootstrap',
                    //Random default events
                    events: [
                        {
                            title          : 'Paid Invoice',
                            start          : new Date(y, m, 1, 12, 45),
                            backgroundColor: '#f56954', //red
                            borderColor    : '#f56954', //red
                            allDay         : false
                        },
                        {
                            title          : 'Something else',
                            start          : new Date(y, m, 7, 5, 30),
                            backgroundColor: '#f39c12', //yellow
                            borderColor    : '#f39c12', //yellow
                            allDay         : false
                        },
                        {
                            title          : 'Meeting',
                            start          : new Date(y, m, d, 10, 30),
                            allDay         : false,
                            backgroundColor: '#0073b7', //Blue
                            borderColor    : '#0073b7' //Blue
                        },
                        {
                            title          : 'Lunch',
                            start          : new Date(y, m, d, 12, 0),
                            end            : new Date(y, m, d, 14, 0),
                            allDay         : false,
                            backgroundColor: '#00c0ef', //Info (aqua)
                            borderColor    : '#00c0ef' //Info (aqua)
                        },
                    ],
                    editable  : true,
                });

                calendar.render();
                // $('#calendar').fullCalendar()

            })
        </script>
    </body>
</html>
