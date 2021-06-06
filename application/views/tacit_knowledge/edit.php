<?php $this->load->view('components/topbar') ?>
    <div id="layoutSidenav">
        <?php $this->load->view('components/sidebar') ?>
        <div id="layoutSidenav_content">
            <main>
                <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                    <div class="container-xl px-4">
                        <div class="page-header-content">
                            <div class="row align-items-center justify-content-between pt-3">
                                <div class="col-auto mb-3">
                                    <h1 class="page-header-title">
                                        <a href="<?php echo base_url('tacit_knowledge') ?>">Tacit Knowledge</a> &nbsp;- Edit Tacit Knowledge
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container-xl px-4">
                    <div class="card mb-4">
                        <div class="card-header">Edit Tacit Knowledge</div>
                        <div class="card-body">
                            <form method="POST" action="<?php echo base_url('tacit_knowledge/update/'); echo $tacit_knowledge->id; ?>" enctype="multipart/form-data">
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select name="knowledge_category_id" class="form-control" required>
                                            <option value="<?php echo $tacit_knowledge->knowledge_category_id; ?>"><?php echo $tacit_knowledge->knowledge_category_id; ?></option>
                                            <?php  foreach ($knowledge_categories as $key => $value) { ?>
                                                <option value="<?php echo $value->id; ?>"><?php echo $value->category_title; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="title" value="<?php echo $tacit_knowledge->title; ?>" placeholder="Enter Title" required>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Content</label>
                                    <div class="col-sm-10">
                                        <textarea name="content" id="editor" rows="7" class="form-control" required><?php echo $tacit_knowledge->content; ?></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Visible to visitor</label>
                                    <div class="col-sm-10">
                                        <select name="is_visible_by_visitor" class="form-control" required>
                                            <?php if ($user->is_visible_by_visitor == 0) { ?>
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            <?php }elseif ($user->is_visible_by_visitor == 1) { ?>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary" type="button">Submit</button>
                                        <a href="<?php echo base_url('tacit_knowledge') ?>"><button class="btn btn-danger" type="button">Cancel</button></a><br><br>
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php $this->load->view('components/footer') ?>
        </div>
    </div>