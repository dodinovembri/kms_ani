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
                        <div class="mb-3 form-group row">
                            <label class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="category" value="<?php echo $knowledge->category_code ?>">
                            </div>
                        </div>
                        <div class="mb-3 form-group row">
                            <label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="title" value="<?php echo $knowledge->title ?>">
                            </div>
                        </div>
                        <?php if (isset($knowledge->file)) { ?>
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label">File</label>
                                <div class="col-sm-10">
                                    <a class="form-control" href="<?php echo base_url('uploads/explicit_knowledge/');
                                                                    echo $knowledge->file ?>"><?php echo $knowledge->file ?></a>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="mb-3 form-group row">
                            <label class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="editor" rows="7" class="form-control" required><?php echo $knowledge->content ?></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-3 form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <?php if ($this->session->userdata('role_id') == 0) { ?>
                                    <a href="<?php echo base_url('knowledge_validate/accept_by_admin/');
                                                echo $knowledge->id; ?>"><button type="button" class="btn btn-primary" style="width: 100px;">Accept</button></a>
                                    <a href="<?php echo base_url('knowledge_validate/reject_by_admin/');
                                                echo $knowledge->id; ?>"><button type="button" class="btn btn-danger" style="width: 100px;">Reject</button></a>
                                <?php } elseif ($this->session->userdata('role_id') == 1) { ?>
                                    <a href="<?php echo base_url('knowledge_validate/accept_by_kasi/');
                                                echo $knowledge->id; ?>"><button type="button" class="btn btn-primary" style="width: 100px;">Accept</button></a>
                                    <a href="<?php echo base_url('knowledge_validate/reject_by_kasi/');
                                                echo $knowledge->id; ?>"><button type="button" class="btn btn-danger" style="width: 100px;">Reject</button></a>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('components/footer') ?>
    </div>
</div>