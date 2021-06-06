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
                                        <a href="<?php echo base_url('explicit_knowledge') ?>">Explicit Knowledge</a> &nbsp;- Edit Explicit Knowledge
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container-xl px-4">
                    <div class="card mb-4">
                        <div class="card-header">Edit Explicit Knowledge</div>
                        <div class="card-body">
                            <form method="POST" action="<?php echo base_url('explicit_knowledge/update/'); echo $explicit_knowledge->id; ?>" enctype="multipart/form-data">
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select name="knowledge_category_id" class="form-control" required>
                                            <option value="<?php echo $explicit_knowledge->knowledge_category_id; ?>"><?php echo $explicit_knowledge->knowledge_category_id; ?></option>
                                            <?php  foreach ($knowledge_categories as $key => $value) { ?>
                                                <option value="<?php echo $value->id; ?>"><?php echo $value->category_title; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="title" value="<?php echo $explicit_knowledge->title ?>" placeholder="Enter Title" required>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">File</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="file" placeholder="Enter Title">
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" id="editor" rows="7" class="form-control" required><?php echo $explicit_knowledge->description ?></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary" type="button">Submit</button>
                                        <a href="<?php echo base_url('explicit_knowledge') ?>"><button class="btn btn-danger" type="button">Cancel</button></a><br><br>
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