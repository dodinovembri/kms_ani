<?php $this->load->view('components/topbar') ?>
<div id="layoutSidenav">
    <?php $this->load->view('components/sidebar') ?>
    <div id="layoutSidenav_content">
        <main>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-4">
                <!-- Knowledge base home header option-->
                <?php if ($this->session->userdata('role_id') != 3) { ?>
                    <div class="col-xxl-4 col-xl-12 mb-4">
                        <div class="card card-header-actions h-100">
                            <div class="card-header">
                                Recent Member Activity
                                <div class="dropdown no-caret">
                                    <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="text-gray-500" data-feather="more-vertical"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownMenuButton">
                                        <h6 class="dropdown-header">Filter Activity:</h6>
                                        <a class="dropdown-item" href="#!"><span class="badge bg-green-soft text-green my-1">Commerce</span></a>
                                        <a class="dropdown-item" href="#!"><span class="badge bg-blue-soft text-blue my-1">Reporting</span></a>
                                        <a class="dropdown-item" href="#!"><span class="badge bg-yellow-soft text-yellow my-1">Server</span></a>
                                        <a class="dropdown-item" href="#!"><span class="badge bg-purple-soft text-purple my-1">Users</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="timeline timeline-xs">
                                    <?php foreach ($activities as $key => $value) { ?>
                                        <!-- Timeline Item 1-->
                                        <div class="timeline-item">
                                            <div class="timeline-item-marker">
                                                <div class="timeline-item-marker-text"><?php echo $value->created_at ?></div>
                                                <div class="timeline-item-marker-indicator bg-green"></div>
                                            </div>
                                            <div class="timeline-item-content">
                                                <?php echo $value->message ?>
                                            </div>
                                        </div>
                                        <!-- Timeline Item 2-->
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </main>
        <footer class="footer-admin mt-auto footer-light">
            <div class="container-xl px-4">
                <div class="row">
                    <div class="col-md-6 small">Copyright © Your Website 2021</div>
                    <div class="col-md-6 text-md-end small">
                        <a href="#!">Privacy Policy</a>
                        ·
                        <a href="#!">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>