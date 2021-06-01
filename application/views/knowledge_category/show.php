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
                                        <a href="<?php echo base_url('knowledge_category') ?>">Knowledge Category</a> &nbsp;- Detail Knowledge Category
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container-xl px-4">
                    <div class="card mb-4">
                        <div class="card-header">Detail Knowledge Category</div>
                        <div class="card-body">
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label">Code</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $knowledge_category->category_code; ?>" readonly>
                                </div>
                            </div>
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label">Icon</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $knowledge_category->category_icon; ?>" readonly>
                                </div>
                            </div>
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label">Background</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $knowledge_category->category_background; ?>" readonly>
                                </div>
                            </div>
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $knowledge_category->category_title; ?>" readonly>
                                </div>
                            </div>
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea rows="5" class="form-control" type="text" readonly><?php echo $knowledge_category->category_description; ?></textarea>
                                </div>
                            </div>
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo check_status($knowledge_category->status) ?>" readonly>
                                </div>
                            </div>
                            <br>
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <a href="<?php echo base_url('knowledge_category') ?>"><button class="btn btn-secondary" type="button">Back to List</button></a><br><br>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </main>
            <?php $this->load->view('components/footer') ?>
        </div>
    </div>