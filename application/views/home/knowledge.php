<?php $this->load->view('components/topbar') ?>
<div id="layoutSidenav">
    <?php $this->load->view('components/sidebar') ?>
    <div id="layoutSidenav_content">
        <main>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-4">
                <h4 class="mb-0 mt-5">Knowledges</h4>
                <hr class="mt-2 mb-4" />
                <div class="row">
                    <?php foreach ($knowledges as $key => $value) { ?>
                        <div class="col-lg-4 mb-4">
                            <!-- Knowledge base category card 1-->
                            <a class="card lift lift-sm h-100" href="
                                <?php if ($value->is_tacit == 1) {
                                    echo base_url('tacit_knowledge/show/'); echo $value->id;   
                                }else {
                                    echo base_url('explicit_knowledge/show/'); echo $value->id;   
                                } ?>
                                ">
                                <div class="card-body py-5">
                                    <h5 class="card-title text-primary mb-2">
                                        <?php echo $value->title; ?>
                                    </h5>
                                    <p class="card-text"><?php echo substr($value->content, 0, 80); ?> ...</p>
                                </div>
                                <div class="card-footer"><div class="small text-muted"><?php echo $value->created_at; ?></div></div>
                            </a>
                        </div>
                    <?php } ?>                   
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