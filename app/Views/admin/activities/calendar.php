<!-- fullCalendar -->
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/fullcalendar/main.css');?>">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Calendar</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Calendar</li>
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
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-body p-0">
                            <!-- THE CALENDAR -->
                            <div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-bootstrap fc-liquid-hack">
                                <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                                    <div class="fc-toolbar-chunk">
                                        <div class="btn-group"><button class="fc-prev-button btn btn-primary" type="button" aria-label="prev"><span class="fa fa-chevron-left"></span></button><button class="fc-next-button btn btn-primary" type="button" aria-label="next"><span class="fa fa-chevron-right"></span></button></div>
                                        <button disabled="" class="fc-today-button btn btn-primary" type="button">today</button>
                                    </div>
                                    <div class="fc-toolbar-chunk">
                                        <h2 class="fc-toolbar-title">January 2023</h2>
                                    </div>
                                    <div class="fc-toolbar-chunk">
                                        <div class="btn-group"><button class="fc-dayGridMonth-button btn btn-primary active" type="button">month</button><button class="fc-timeGridWeek-button btn btn-primary" type="button">week</button><button class="fc-timeGridDay-button btn btn-primary" type="button">day</button></div>
                                    </div>
                                </div>
                                <div class="fc-view-harness fc-view-harness-active" style="height: 697.037px;">
                                    <div class="fc-daygrid fc-dayGridMonth-view fc-view">
                                        <table class="fc-scrollgrid table-bordered fc-scrollgrid-liquid">
                                            <tbody>
                                            <tr class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                                <td>
                                                    <div class="fc-scroller-harness">
                                                        <div class="fc-scroller" style="overflow: hidden;">
                                                            <table class="fc-col-header " style="width: 939px;">
                                                                <colgroup></colgroup>
                                                                <tbody>
                                                                <tr>
                                                                    <th class="fc-col-header-cell fc-day fc-day-sun">
                                                                        <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Sun</a></div>
                                                                    </th>
                                                                    <th class="fc-col-header-cell fc-day fc-day-mon">
                                                                        <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Mon</a></div>
                                                                    </th>
                                                                    <th class="fc-col-header-cell fc-day fc-day-tue">
                                                                        <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Tue</a></div>
                                                                    </th>
                                                                    <th class="fc-col-header-cell fc-day fc-day-wed">
                                                                        <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Wed</a></div>
                                                                    </th>
                                                                    <th class="fc-col-header-cell fc-day fc-day-thu">
                                                                        <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Thu</a></div>
                                                                    </th>
                                                                    <th class="fc-col-header-cell fc-day fc-day-fri">
                                                                        <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Fri</a></div>
                                                                    </th>
                                                                    <th class="fc-col-header-cell fc-day fc-day-sat">
                                                                        <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Sat</a></div>
                                                                    </th>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
                                                <td>
                                                    <div class="fc-scroller-harness fc-scroller-harness-liquid">
                                                        <div class="fc-scroller fc-scroller-liquid-absolute" style="overflow: hidden auto;">
                                                            <div class="fc-daygrid-body fc-daygrid-body-unbalanced " style="width: 939px;">
                                                                <table class="fc-scrollgrid-sync-table" style="width: 939px; height: 666px;">
                                                                    <colgroup></colgroup>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past" data-date="2023-01-01">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">1</a></div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-event-harness">
                                                                                        <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past" style="border-color: rgb(245, 105, 84); background-color: rgb(245, 105, 84);">
                                                                                            <div class="fc-event-main">
                                                                                                <div class="fc-event-main-frame">
                                                                                                    <div class="fc-event-title-container">
                                                                                                        <div class="fc-event-title fc-sticky">All Day Event</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past" data-date="2023-01-02">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">2</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past" data-date="2023-01-03">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">3</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past" data-date="2023-01-04">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">4</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past" data-date="2023-01-05">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">5</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past" data-date="2023-01-06">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">6</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past" data-date="2023-01-07">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">7</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past" data-date="2023-01-08">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">8</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past" data-date="2023-01-09">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">9</a></div>
                                                                                <div class="fc-daygrid-day-events" style="padding-bottom: 25.4px;">
                                                                                    <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="right: -268.267px;">
                                                                                        <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-start fc-event-end fc-event-past" style="border-color: rgb(243, 156, 18); background-color: rgb(243, 156, 18);">
                                                                                            <div class="fc-event-main">
                                                                                                <div class="fc-event-main-frame">
                                                                                                    <div class="fc-event-time">12a</div>
                                                                                                    <div class="fc-event-title-container">
                                                                                                        <div class="fc-event-title fc-sticky">Long Event</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past" data-date="2023-01-10">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">10</a></div>
                                                                                <div class="fc-daygrid-day-events" style="padding-bottom: 25.4px;"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past" data-date="2023-01-11">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">11</a></div>
                                                                                <div class="fc-daygrid-day-events" style="padding-bottom: 25.4px;"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past" data-date="2023-01-12">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">12</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past" data-date="2023-01-13">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">13</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-today " data-date="2023-01-14">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">14</a></div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-event-harness">
                                                                                        <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today">
                                                                                            <div class="fc-daygrid-event-dot" style="border-color: rgb(0, 115, 183);"></div>
                                                                                            <div class="fc-event-time">10:30a</div>
                                                                                            <div class="fc-event-title">Meeting</div>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-event-harness">
                                                                                        <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today">
                                                                                            <div class="fc-daygrid-event-dot" style="border-color: rgb(0, 192, 239);"></div>
                                                                                            <div class="fc-event-time">12p</div>
                                                                                            <div class="fc-event-title">Lunch</div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future" data-date="2023-01-15">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">15</a></div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-event-harness">
                                                                                        <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                            <div class="fc-daygrid-event-dot" style="border-color: rgb(0, 166, 90);"></div>
                                                                                            <div class="fc-event-time">7p</div>
                                                                                            <div class="fc-event-title">Birthday Party</div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future" data-date="2023-01-16">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">16</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future" data-date="2023-01-17">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">17</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future" data-date="2023-01-18">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">18</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future" data-date="2023-01-19">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">19</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2023-01-20">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">20</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2023-01-21">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">21</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future" data-date="2023-01-22">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">22</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future" data-date="2023-01-23">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">23</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future" data-date="2023-01-24">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">24</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future" data-date="2023-01-25">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">25</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future" data-date="2023-01-26">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">26</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2023-01-27">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">27</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2023-01-28">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">28</a></div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-event-harness">
                                                                                        <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future" href="https://www.google.com/">
                                                                                            <div class="fc-daygrid-event-dot" style="border-color: rgb(60, 141, 188);"></div>
                                                                                            <div class="fc-event-time">12a</div>
                                                                                            <div class="fc-event-title">Click for Google</div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future" data-date="2023-01-29">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">29</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future" data-date="2023-01-30">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">30</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future" data-date="2023-01-31">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">31</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future fc-day-other" data-date="2023-02-01">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">1</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future fc-day-other" data-date="2023-02-02">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">2</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other" data-date="2023-02-03">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">3</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other" data-date="2023-02-04">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">4</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future fc-day-other" data-date="2023-02-05">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">5</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future fc-day-other" data-date="2023-02-06">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">6</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future fc-day-other" data-date="2023-02-07">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">7</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future fc-day-other" data-date="2023-02-08">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">8</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future fc-day-other" data-date="2023-02-09">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">9</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other" data-date="2023-02-10">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">10</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other" data-date="2023-02-11">
                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">11</a></div>
                                                                                <div class="fc-daygrid-day-events"></div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- /.footer -->