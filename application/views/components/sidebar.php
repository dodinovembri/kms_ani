            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">                           
                            <!-- Sidenav Menu Heading (Core)-->
                            <div class="sidenav-menu-heading">Core</div>
                            <!-- Sidenav Accordion (Dashboard)-->
                            <a class="nav-link" href="charts.html">
                                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                                Dashboard
                            </a>
                            <!-- Sidenav Heading (App Views)-->
                            <div class="sidenav-menu-heading">Knowledge Management</div>
                            <!-- Sidenav Accordion (Pages)-->
                            <a class="nav-link" href="charts.html">
                                <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                                Tacit Knowledge
                            </a>
                            <a class="nav-link" href="charts.html">
                                <div class="nav-link-icon"><i data-feather="layout"></i></div>
                                Explicit Knowledge
                            </a>
                            <!-- Sidenav Heading (Addons)-->
                            <div class="sidenav-menu-heading">Setup Management</div>
                            <!-- Sidenav Link (Charts)-->
                            <a class="nav-link <?php if ($this->uri->segment(1) == "user") {
                                echo "active";
                            } ?>" href="<?php echo base_url('user') ?>">
                                <div class="nav-link-icon"><i data-feather="users"></i></div>
                                User
                            </a>
                        </div>
                    </div>
                </nav>
            </div>