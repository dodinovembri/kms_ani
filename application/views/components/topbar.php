        <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
            <!-- Sidenav Toggle Button-->
            <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i data-feather="menu"></i></button>
            <!-- Navbar Brand-->
            <!-- * * Tip * * You can use text or an image for your navbar brand.-->
            <!-- * * * * * * When using an image, we recommend the SVG format.-->
            <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
            <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="<?php echo base_url('home') ?>">SB Admin Pro</a>
            <!-- Navbar Search Input-->
            <!-- * * Note: * * Visible only on and above the lg breakpoint-->
            <form class="form-inline me-auto d-none d-lg-block me-3">
                <div class="input-group input-group-joined input-group-solid">
                    <input class="form-control pe-0" type="search" placeholder="Search" aria-label="Search" />
                    <div class="input-group-text"><i data-feather="search"></i></div>
                </div>
            </form>
            <!-- Navbar Items-->
            <ul class="navbar-nav align-items-center ms-auto">
                <!-- Alerts Dropdown-->
                <?php 
                    $CI =& get_instance();
                    $CI->load->model(['NotificationModel']);
                    $user_id = $this->session->userdata('id');
                    $notifications = $CI->NotificationModel->getByWhere($user_id)->result();
                    $count_notif = count($notifications);
                ?>
                <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="bell"></i><sup style="color:red"><b><?php echo $count_notif; ?></b></sup></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <i class="me-2" data-feather="bell"> </i>  
                            Notifications
                        </h6>
                        <!-- Example Alert 1-->
                        <?php foreach ($notifications as $key => $value) { ?>    
                            <a class="dropdown-item dropdown-notifications-item" href="
                                <?php if ($value->is_tacit == 1) {
                                    echo base_url('tacit_knowledge/show/'); echo $value->id."/".'1';    
                                }else {
                                    echo base_url('explicit_knowledge/show/'); echo $value->id."/".'1';     
                                } ?>
                            ">
                                <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"> </i></div>
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-details"><?php echo $value->created_at; ?></div>
                                    <div class="dropdown-notifications-item-content-text"><?php echo $value->title; ?></div>
                                </div>
                            </a>
                        <?php } ?>
                        <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Notifications</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="<?php echo base_url('chat'); ?>" role="button" aria-haspopup="true" aria-expanded="false"><i data-feather="mail"></i></a>
                </li>
                <!-- User Dropdown-->
                <?php 
                    $CI =& get_instance();
                    $CI->load->model(['UserModel']);
                    $user_id = $this->session->userdata('id');
                    $user = $CI->UserModel->getById($user_id)->row();
                ?>
                <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="<?php echo base_url('uploads/user/'); echo $user->image; ?>" /></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <img class="dropdown-user-img" src="<?php echo base_url('uploads/user/'); echo $user->image; ?>" />
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name"><?php echo $user->name; ?></div>
                                <div class="dropdown-user-details-email"><?php echo $user->email; ?></div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('profile') ?>">
                            <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                            Account
                        </a>
                        <a class="dropdown-item" href="<?php echo base_url('profile/change_password') ?>">
                            <div class="dropdown-item-icon"><i data-feather="key"></i></div>
                            Change Password
                        </a>
                        <a class="dropdown-item" href="<?php echo base_url('logout') ?>">
                            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>