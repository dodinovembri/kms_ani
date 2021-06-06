<?php $this->load->view('components/topbar') ?>
<div id="layoutSidenav">
    <?php $this->load->view('components/sidebar') ?>
    <div id="layoutSidenav_content">
        <main>
        <br>
            <!-- Main page content-->
            <div class="container-xl px-4">
                <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-primary" role="alert"><?php echo $this->session->flashdata('success'); ?></div>
                    <?php $this->session->unset_userdata('success'); ?>
                <?php } elseif ($this->session->flashdata('warning')) { ?>
                    <div class="alert alert-warning" role="alert"><?php echo $this->session->flashdata('warning'); ?></div>
                    <?php $this->session->unset_userdata('warning'); ?>
                <?php } ?>         
            </div>   
            <div class="container-xl px-4">
                <div class="card mb-4">
                    <div class="container-xl px-4">
                        <!-- Knowledge base category-->
                        <h2 class="mb-0 mt-4">I Need Some Help</h2> 
                        <hr class="mt-2 mb-4" />
                        <!-- Knowledge base item-->
                        <form action="<?php echo base_url('help/store') ?>" method="POST">
                            <input type="text" name="title" id="" class="form-control" placeholder="Subject"><br>
                            <textarea type="text" id="editor" name="help_message" rows="5" class="form-control" name=""></textarea> <br>
                            <button type="submit" class="btn btn-primary" type="button">Submit</button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
            <div class="container-xl px-4">
                <div class="card mb-4">
                    <div class="container-xl px-4">
                        <!-- Knowledge base category-->
                        <h2 class="mb-0 mt-4">Help Content</h2> 
                        <hr class="mt-2 mb-4" />
                        <!-- Knowledge base item-->
                        <?php foreach ($helps as $key => $value) { ?>
                            <a class="card card-icon lift lift-sm mb-2" href="<?php echo base_url('help/show/'); echo $value->id; ?>">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="h5 card-title mb-0"><?php echo $value->title ?></div>
                                        <i class="flex-shrink-0 ms-4" data-feather="chevron-right"></i>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                        <br>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('components/footer') ?>
    </div>
</div>