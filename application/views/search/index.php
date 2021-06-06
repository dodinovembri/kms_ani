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
                <h4 class="mb-0 mt-5">Knowledge Search Result</h4>
                <hr class="mt-2 mb-4" />
                <?php foreach ($knowledges as $key => $value) { ?>
                    <a class="card lift lift-sm h-100" href="
                                <?php if ($value->is_tacit == 1) {
                                    echo base_url('tacit_knowledge/show/');
                                    echo $value->id;
                                } else {
                                    echo base_url('explicit_knowledge/show/');
                                    echo $value->id;
                                } ?>
                                ">
                        <div class="row g-0">
                            <!-- Knowledge base category card 1-->
                            
                                <div class="card-body py-5">
                                    <h5 class="card-title text-primary mb-2">
                                        <?php echo $value->title; ?>
                                    </h5>
                                    <p class="card-text"><?php echo substr($value->content, 0, 220); ?> ...</p>
                                </div>
                                <div class="card-footer">
                                    <div class="small text-muted"><?php echo $value->created_at; ?></div>
                                </div>
                        </div>
                    </a><br>
                <?php } ?>
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