<?php $this->load->view('components/topbar') ?>
<div id="layoutSidenav">
    <?php $this->load->view('components/sidebar') ?>
    <div id="layoutSidenav_content">
        <main>
            <br>
            <!-- Main page content-->
            <div class="container-xl px-4">
                <!-- Knowledge base article-->
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <a class="btn btn-transparent-dark btn-icon" href="<?php echo base_url('tacit_knowledge') ?>"><i data-feather="arrow-left"></i></a>
                        <div class="ms-3"><h2 class="my-3"><?php echo $tacit_knowledge->title; ?></h2></div>
                    </div>
                    <div class="card-body">
                        <p><?php echo $tacit_knowledge->content ?></p>
                        <div class="alert alert-primary alert-icon mb-0" role="alert">
                            <div class="alert-icon-aside"><i data-feather="user"></i></div>
                            <div class="alert-icon-content">
                                <h5 class="alert-heading">Knowledge Information</h5>
                                <?php echo "Created By: ". $tacit_knowledge->creator_id. ", At: ". $tacit_knowledge->created_at; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('components/footer') ?>
    </div>
</div>