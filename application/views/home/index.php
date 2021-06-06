<?php $this->load->view('components/topbar') ?>
<div id="layoutSidenav">
    <?php $this->load->view('components/sidebar') ?>
    <div id="layoutSidenav_content">
        <main>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-4">
                <!-- Knowledge base home header option-->
                <header class="card card-waves">
                    <div class="card-body px-5 pt-5 pb-0">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6">
                                <h1 class="text-primary">How can we help?</h1>
                                <p class="lead mb-4">Search our knowledge base to find answers, or contact us directly if you're having issues!</p>
                                <div class="shadow rounded">
                                    <form action="<?php echo base_url('search') ?>" method="POST">
                                    <div class="input-group input-group-joined input-group-joined-xl border-0">
                                            <input class="form-control me-0" name="word" type="text" placeholder="Search..." aria-label="Search" autofocus="" />
                                            <span class="input-group-text"><i data-feather="search"></i></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4"><img class="img-fluid" src="<?php echo base_url('assets/assets/img/illustrations/problem-solving.svg') ?>" /></div>
                        </div>
                    </div>
                </header>
                <h4 class="mb-0 mt-5">Main Categories</h4>
                <hr class="mt-2 mb-4" />
                <!-- Knowledge base main category card 1-->
                <?php foreach ($knowledge_categories as $key => $value) { ?>
                    <a class="card card-icon lift lift-sm mb-4" href="<?php echo base_url('home/knowledge/'); echo $value->id; ?>">
                        <div class="row g-0">
                            <div class="col-auto card-icon-aside bg-<?php echo $value->category_background; ?>"><i class="text-white-50" data-feather="<?php echo $value->category_icon; ?>"></i></div>
                            <div class="col">
                                <div class="card-body py-5">
                                    <h5 class="card-title text-<?php echo $value->category_background; ?> mb-2"><?php echo $value->category_title; ?></h5>
                                    <p class="card-text mb-1"><?php echo $value->category_description; ?></p>
                                    <div class="small text-muted">Articles in this category</div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>   
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
                                <!-- Timeline Item 1-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">27 min</div>
                                        <div class="timeline-item-marker-indicator bg-green"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        New order placed!
                                        <a class="fw-bold text-dark" href="#!">Order #2912</a>
                                        has been successfully placed.
                                    </div>
                                </div>
                                <!-- Timeline Item 2-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">58 min</div>
                                        <div class="timeline-item-marker-indicator bg-blue"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        Your
                                        <a class="fw-bold text-dark" href="#!">weekly report</a>
                                        has been generated and is ready to view.
                                    </div>
                                </div>
                                <!-- Timeline Item 3-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">2 hrs</div>
                                        <div class="timeline-item-marker-indicator bg-purple"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        New user
                                        <a class="fw-bold text-dark" href="#!">Valerie Luna</a>
                                        has registered
                                    </div>
                                </div>
                                <!-- Timeline Item 4-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">1 day</div>
                                        <div class="timeline-item-marker-indicator bg-yellow"></div>
                                    </div>
                                    <div class="timeline-item-content">Server activity monitor alert</div>
                                </div>
                                <!-- Timeline Item 5-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">1 day</div>
                                        <div class="timeline-item-marker-indicator bg-green"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        New order placed!
                                        <a class="fw-bold text-dark" href="#!">Order #2911</a>
                                        has been successfully placed.
                                    </div>
                                </div>
                                <!-- Timeline Item 6-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">1 day</div>
                                        <div class="timeline-item-marker-indicator bg-purple"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        Details for
                                        <a class="fw-bold text-dark" href="#!">Marketing and Planning Meeting</a>
                                        have been updated.
                                    </div>
                                </div>
                                <!-- Timeline Item 7-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">2 days</div>
                                        <div class="timeline-item-marker-indicator bg-green"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        New order placed!
                                        <a class="fw-bold text-dark" href="#!">Order #2910</a>
                                        has been successfully placed.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>         
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