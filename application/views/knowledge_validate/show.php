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
                        <a class="btn btn-transparent-dark btn-icon" href="<?php echo base_url('knowledge') ?>"><i data-feather="arrow-left"></i></a>
                        <div class="ms-3"><h2 class="my-3"><?php echo $knowledge->title; ?></h2></div>
                    </div>
                    <div class="card-body">
                        <p><?php echo $knowledge->content ?></p>
                        <div class="alert alert-primary alert-icon mb-0" role="alert">
                            <div class="alert-icon-aside"><i data-feather="user"></i></div>
                            <div class="alert-icon-content">
                                <h5 class="alert-heading">Knowledge Information</h5>
                                <?php echo "Created By: ". $knowledge->creator_id. ", At: ". $knowledge->created_at; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Knowledge base rating-->
                <div class="text-center mt-5">
                    <h4 class="mb-3">This knowledge is helpful?</h4>
                    <div class="mb-3">
                        <a href="<?php echo base_url('knowledge_validate/accept_by_admin/'); echo $knowledge->id; ?>"><button class="btn btn-primary mx-2 px-3" role="button">
                            <i class="me-2" data-feather="thumbs-up"></i>
                            Yes
                        </button></a>
                        <a href="<?php echo base_url('knowledge_validate/reject_by_admin/'); echo $knowledge->id; ?>"><button class="btn btn-danger mx-2 px-3" role="button">
                            <i class="me-2" data-feather="thumbs-down"></i>
                            No
                        </button></a>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('components/footer') ?>
    </div>
</div>