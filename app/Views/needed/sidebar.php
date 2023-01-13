    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?php echo base_url('home');?>" class="brand-link">
            <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Prj Accounts</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-header">Options</li>
                    <li class="nav-item">
                        <?php
                            if ($page_title == "Home"){
                                echo '<a href="'.base_url('home').'" class="nav-link active">';
                            }else{
                                echo '<a href="'.base_url('home').'" class="nav-link">';
                            }
                        ?>
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Home
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">Sources</li>
                    <li class="nav-item">
                        <?php
                            if ($page_title == "Source_fiverr"){
                                echo '<a href="'.base_url('source/fiverr').'" class="nav-link active">';
                            }else{
                                echo '<a href="'.base_url('source/fiverr').'" class="nav-link">';
                            }
                        ?>
                            <i class="nav-icon fab fa-fonticons-fi"></i>
                            <p>
                                Fiverr
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <?php
                            if ($page_title == "Source_dc"){
                                echo '<a href="'.base_url('source/dc').'" class="nav-link active">';
                            }else{
                                echo '<a href="'.base_url('source/dc').'" class="nav-link">';
                            }
                        ?>
                            <i class="nav-icon fab fa-dailymotion"></i>
                            <p>
                                DC
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">Writers</li>
                    <li class="nav-item">
                        <?php
                            if ($page_title == "Writers"){
                                echo '<a href="'.base_url('users/writer').'" class="nav-link active">';
                            }else{
                                echo '<a href="'.base_url('users/writer').'" class="nav-link">';
                            }
                        ?>
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">Activities</li>
                    <li class="nav-item">
                        <?php
                            if ($page_title == "Calendar"){
                                echo '<a href="'.base_url('activities/calendar').'" class="nav-link active">';
                            }else{
                                echo '<a href="'.base_url('activities/calendar').'" class="nav-link">';
                            }
                        ?>
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Calendar
                                <span class="badge badge-info right">2</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <?php
                            if ($page_title == "Invoices"){
                                echo '<a href="'.base_url('activities/invoices').'" class="nav-link active">';
                            }else{
                                echo '<a href="'.base_url('activities/invoices').'" class="nav-link">';
                            }
                        ?>
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Invoices
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->