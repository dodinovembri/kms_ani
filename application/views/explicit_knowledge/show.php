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
                                        <a href="<?php echo base_url('explicit_knowledge') ?>">Explicit Knowledge</a> &nbsp;- Detail Explicit Knowledge
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container-xl px-4">
                    <div class="card mb-4">
                        <div class="card-header">Detail Explicit Knowledge</div>
                        <div class="card-body">
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="category" value="<?php echo $explicit_knowledge->category_code ?>">
                                </div>
                            </div>
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="title" value="<?php echo $explicit_knowledge->title ?>">
                                </div>
                            </div>
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label">File</label>
                                <div class="col-sm-10">
                                    <a class="form-control" href="<?php echo base_url('uploads/explicit_knowledge/'); echo $explicit_knowledge->file ?>"><?php echo $explicit_knowledge->file ?></a>
                                </div>
                            </div>
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" id="editor" rows="7" class="form-control" required><?php echo $explicit_knowledge->content ?></textarea>
                                </div>
                            </div>                            
                            <br>
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <a href="<?php echo base_url('explicit_knowledge') ?>"><button class="btn btn-primary" type="button">Back to List</button></a><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>            
            <?php $this->load->view('components/footer') ?>
        </div>
    </div>