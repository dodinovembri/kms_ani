            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <?php if ($this->session->userdata('role_id') == 0) { ?>
                            <div class="nav accordion" id="accordionSidenav">                           
                                <div class="sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="<?php echo base_url('home') ?>">
                                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                                    Dashboard
                                </a>
                                <div class="sidenav-menu-heading">Knowledge Management</div>
                                <a class="nav-link" href="<?php echo base_url('knowledge_validate') ?>">
                                    <div class="nav-link-icon"><i data-feather="check-circle"></i></div>
                                    Validation Knowledge
                                </a>                                
                                <a class="nav-link" href="<?php echo base_url('tacit_knowledge') ?>">
                                    <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                                    Tacit Knowledge
                                </a>
                                <a class="nav-link" href="<?php echo base_url('explicit_knowledge') ?>">
                                    <div class="nav-link-icon"><i data-feather="layout"></i></div>
                                    Explicit Knowledge
                                </a>
                            </div>
                        <?php }elseif ($this->session->userdata('role_id') == 1) { ?>
                            <div class="nav accordion" id="accordionSidenav">                           
                                <div class="sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="<?php echo base_url('home') ?>">
                                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                                    Dashboard
                                </a>
                                <div class="sidenav-menu-heading">Knowledge Management</div>
                                <a class="nav-link" href="<?php echo base_url('knowledge_validate') ?>">
                                    <div class="nav-link-icon"><i data-feather="check-circle"></i></div>
                                    Validation Knowledge
                                </a> 
                                <a class="nav-link" href="<?php echo base_url('tacit_knowledge') ?>">
                                    <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                                    Tacit Knowledge
                                </a>
                                <a class="nav-link" href="<?php echo base_url('explicit_knowledge') ?>">
                                    <div class="nav-link-icon"><i data-feather="layout"></i></div>
                                    Explicit Knowledge
                                </a>
                                <div class="sidenav-menu-heading">Setup Management</div>
                                <a class="nav-link <?php if ($this->uri->segment(1) == "user") {
                                    echo "active";
                                } ?>" href="<?php echo base_url('user') ?>">
                                    <div class="nav-link-icon"><i data-feather="users"></i></div>
                                    User
                                </a>
                            </div>
                        <?php }elseif ($this->session->userdata('role_id') == 2) { ?>
                            <div class="nav accordion" id="accordionSidenav">                           
                                <div class="sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="<?php echo base_url('home') ?>">
                                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                                    Dashboard
                                </a>
                                <div class="sidenav-menu-heading">Knowledge Management</div>
                                <a class="nav-link" href="<?php echo base_url('knowledge_validate') ?>">
                                    <div class="nav-link-icon"><i data-feather="check-circle"></i></div>
                                    Validation Knowledge
                                </a> 
                                <a class="nav-link" href="<?php echo base_url('tacit_knowledge') ?>">
                                    <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                                    Tacit Knowledge
                                </a>
                                <a class="nav-link" href="<?php echo base_url('explicit_knowledge') ?>">
                                    <div class="nav-link-icon"><i data-feather="layout"></i></div>
                                    Explicit Knowledge
                                </a>
                                <div class="sidenav-menu-heading">Setup Management</div>
                                <a class="nav-link <?php if ($this->uri->segment(1) == "user") {
                                    echo "active";
                                } ?>" href="<?php echo base_url('user') ?>">
                                    <div class="nav-link-icon"><i data-feather="users"></i></div>
                                    User
                                </a>
                            </div>
                        <?php }elseif ($this->session->userdata('role_id') == 3) { ?>
                            <div class="nav accordion" id="accordionSidenav">                           
                                <div class="sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="<?php echo base_url('home') ?>">
                                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                                    Dashboard
                                </a>
                                <div class="sidenav-menu-heading">Knowledge Management</div>
                                <a class="nav-link" href="<?php echo base_url('knowledge_validate') ?>">
                                    <div class="nav-link-icon"><i data-feather="check-circle"></i></div>
                                    Validation Knowledge
                                </a> 
                                <a class="nav-link" href="<?php echo base_url('tacit_knowledge') ?>">
                                    <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                                    Tacit Knowledge
                                </a>
                                <a class="nav-link" href="<?php echo base_url('explicit_knowledge') ?>">
                                    <div class="nav-link-icon"><i data-feather="layout"></i></div>
                                    Explicit Knowledge
                                </a>
                                <div class="sidenav-menu-heading">Setup Management</div>
                                <a class="nav-link <?php if ($this->uri->segment(1) == "user") {
                                    echo "active";
                                } ?>" href="<?php echo base_url('user') ?>">
                                    <div class="nav-link-icon"><i data-feather="users"></i></div>
                                    User
                                </a>
                            </div>

                        <?php } ?>
                    </div>
                </nav>
            </div>