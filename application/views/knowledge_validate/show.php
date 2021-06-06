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
                    <div class="card-header"><?php echo $knowledge->title ?></div>
                    <div class="card-body">
                        <p><?php echo $knowledge->content ?></p>
                        <hr>
                        <?php if ($this->session->userdata('role_id') == 0) { ?>
                            <a href="<?php echo base_url('knowledge_validate/accept_by_admin/'); echo $knowledge->id; ?>"><button type="button" class="btn btn-primary" style="width: 100px;">Accept</button></a>
                            <a href="<?php echo base_url('knowledge_validate/reject_by_admin/'); echo $knowledge->id; ?>"><button type="button"  class="btn btn-danger" style="width: 100px;">Reject</button></a>
                        <?php }elseif ($this->session->userdata('role_id') == 1) { ?>
                            <a href="<?php echo base_url('knowledge_validate/accept_by_kasi/'); echo $knowledge->id; ?>"><button type="button" class="btn btn-primary" style="width: 100px;">Accept</button></a>
                            <a href="<?php echo base_url('knowledge_validate/reject_by_kasi/'); echo $knowledge->id; ?>"><button type="button"  class="btn btn-danger" style="width: 100px;">Reject</button></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('components/footer') ?>
    </div>
</div>