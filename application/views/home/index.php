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
                                    <div class="input-group input-group-joined input-group-joined-xl border-0">
                                        <input class="form-control me-0" type="text" placeholder="Search..." aria-label="Search" autofocus="" />
                                        <span class="input-group-text"><i data-feather="search"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4"><img class="img-fluid" src="<?php echo base_url('assets/assets/img/illustrations/problem-solving.svg') ?>" /></div>
                        </div>
                    </div>
                </header>
                <h4 class="mb-0 mt-5">Main Categories</h4>
                <hr class="mt-2 mb-4" />
                <!-- Knowledge base main category card 1-->
                <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-category.html">
                    <div class="row g-0">
                        <div class="col-auto card-icon-aside bg-primary"><i class="text-white-50" data-feather="compass"></i></div>
                        <div class="col">
                            <div class="card-body py-5">
                                <h5 class="card-title text-primary mb-2">Getting Started</h5>
                                <p class="card-text mb-1">Basic information about getting started including installation instructions, setup, and basic usage.</p>
                                <div class="small text-muted">5 articles in this category</div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- Knowledge base main category card 2-->
                <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-category.html">
                    <div class="row g-0">
                        <div class="col-auto card-icon-aside bg-secondary"><i class="text-white-50" data-feather="users"></i></div>
                        <div class="col">
                            <div class="card-body py-5">
                                <h5 class="card-title text-secondary mb-2">Account Information</h5>
                                <p class="card-text mb-1">Troubleshooting guides specific to your account including creating new accounts, modifying existing accounts, and deleting accounts.</p>
                                <div class="small text-muted">3 articles in this category</div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- Knowledge base main category card 3-->
                <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-category.html">
                    <div class="row g-0">
                        <div class="col-auto card-icon-aside bg-teal"><i class="text-white-50" data-feather="book"></i></div>
                        <div class="col">
                            <div class="card-body py-5">
                                <h5 class="card-title text-teal mb-2">Terms of Service</h5>
                                <p class="card-text mb-1">Our terms, licensing, and other legal documentation.</p>
                                <div class="small text-muted">7 articles in this category</div>
                            </div>
                        </div>
                    </div>
                </a>
                <h4 class="mb-0 mt-5">Other Topics</h4>
                <hr class="mt-2 mb-4" />
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 1-->
                        <a class="card lift lift-sm h-100" href="knowledge-base-category.html">
                            <div class="card-body py-5">
                                <h5 class="card-title text-primary mb-2">
                                    <i class="me-2" data-feather="edit-2"></i>
                                    Brand Guidelines
                                </h5>
                                <p class="card-text">Information about what you can and can't do when using our logos and other assets</p>
                            </div>
                            <div class="card-footer"><div class="small text-muted">3 articles in this category</div></div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 2-->
                        <a class="card lift lift-sm h-100" href="knowledge-base-category.html">
                            <div class="card-body py-5">
                                <h5 class="card-title text-yellow mb-2">
                                    <i class="me-2" data-feather="credit-card"></i>
                                    Billing Information
                                </h5>
                                <p class="card-text">Troubleshoot billing issues, subscriptions, and updating payment information</p>
                            </div>
                            <div class="card-footer"><div class="small text-muted">2 articles in this category</div></div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 3-->
                        <a class="card lift lift-sm h-100" href="knowledge-base-category.html">
                            <div class="card-body py-5">
                                <h5 class="card-title text-teal mb-2">
                                    <i class="me-2" data-feather="code"></i>
                                    API
                                </h5>
                                <p class="card-text">Documentation and integration instructions for our API</p>
                            </div>
                            <div class="card-footer"><div class="small text-muted">15 articles in this category</div></div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 4-->
                        <a class="card lift lift-sm h-100" href="knowledge-base-category.html">
                            <div class="card-body py-5">
                                <h5 class="card-title text-orange mb-2">
                                    <i class="me-2" data-feather="layers"></i>
                                    Integration
                                </h5>
                                <p class="card-text">App integration policies and related content on connecting to our database</p>
                            </div>
                            <div class="card-footer"><div class="small text-muted">5 articles in this category</div></div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 5-->
                        <a class="card lift lift-sm h-100" href="knowledge-base-category.html">
                            <div class="card-body py-5">
                                <h5 class="card-title text-secondary mb-2">
                                    <i class="me-2" data-feather="lock"></i>
                                    Privacy &amp; Content
                                </h5>
                                <p class="card-text">Our privacy policy and information on how we track and utilize user data</p>
                            </div>
                            <div class="card-footer"><div class="small text-muted">2 articles in this category</div></div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 6-->
                        <a class="card lift lift-sm h-100" href="knowledge-base-category.html">
                            <div class="card-body py-5">
                                <h5 class="card-title text-red mb-2">
                                    <i class="me-2" data-feather="map"></i>
                                    Miscellaneous
                                </h5>
                                <p class="card-text">Other troubleshooting, help, and support articles related to our products and services</p>
                            </div>
                            <div class="card-footer"><div class="small text-muted">2 articles in this category</div></div>
                        </a>
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