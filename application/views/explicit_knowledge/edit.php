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
                                        <input class="form-control" type="text" name="category" value="<?php echo $explicit_knowledge->category; ?>" placeholder="Enter Category" required>
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
                                        <textarea name="description" rows="7" class="form-control" required><?php echo $explicit_knowledge->description ?></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select name="status" class="form-control" required>
                                            <?php if ($explicit_knowledge->status == 0) { ?>
                                                <option value="0">Inactive</option>
                                                <option value="1">Active</option>
                                            <?php }elseif ($explicit_knowledge->status == 1) { ?>
                                                <option value="0">Inactive</option>
                                                <option value="1">Active</option>
                                            <?php } ?>
                                        </select>
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