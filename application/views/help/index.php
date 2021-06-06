<?php $this->load->view('components/topbar') ?>
<div id="layoutSidenav">
    <?php $this->load->view('components/sidebar') ?>
    <div id="layoutSidenav_content">
        <main>
            <br>
            <!-- Main page content-->
            <div class="container-xl px-4">
                <div class="card mb-4">
                    <div class="container-xl px-4">
                        <!-- Knowledge base category-->
                        <h2 class="mb-0 mt-5">Help Content</h2>
                        <hr class="mt-2 mb-4" />
                        <!-- Knowledge base item-->
                        <a class="card card-icon lift lift-sm mb-2" href="knowledge-base-article.html">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 card-title mb-0">How to update your billing information</div>
                                    <i class="flex-shrink-0 ms-4" data-feather="chevron-right"></i>
                                </div>
                            </div>
                        </a>
                        <!-- Knowledge base item-->
                        <a class="card card-icon lift lift-sm mb-2" href="knowledge-base-article.html">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 card-title mb-0">Integrating with the API</div>
                                    <i class="flex-shrink-0 ms-4" data-feather="chevron-right"></i>
                                </div>
                            </div>
                        </a>
                        <!-- Knowledge base item-->
                        <a class="card card-icon lift lift-sm mb-2" href="knowledge-base-article.html">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 card-title mb-0">Setting up new accounts within our platform</div>
                                    <i class="flex-shrink-0 ms-4" data-feather="chevron-right"></i>
                                </div>
                            </div>
                        </a>
                        <!-- Knowledge base item-->
                        <a class="card card-icon lift lift-sm mb-2" href="knowledge-base-article.html">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 card-title mb-0">Accessing and editing order details</div>
                                    <i class="flex-shrink-0 ms-4" data-feather="chevron-right"></i>
                                </div>
                            </div>
                        </a>
                        <!-- Knowledge base item-->
                        <a class="card card-icon lift lift-sm mb-2" href="knowledge-base-article.html">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 card-title mb-0">Installation instructions for Windows 10 users</div>
                                    <i class="flex-shrink-0 ms-4" data-feather="chevron-right"></i>
                                </div>
                            </div>
                        </a>
                        <!-- Knowledge base item-->
                        <a class="card card-icon lift lift-sm mb-2" href="knowledge-base-article.html">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 card-title mb-0">Installation instructions for Mac OSX users</div>
                                    <i class="flex-shrink-0 ms-4" data-feather="chevron-right"></i>
                                </div>
                            </div>
                        </a>
                        <!-- knowledge base rating-->
                        <br>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('components/footer') ?>
    </div>
</div>