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
                                        <a href="<?php echo base_url('knowledge_category') ?>">Knowledge Category</a> &nbsp;- Create Knowledge Category
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container-xl px-4">
                    <div class="card mb-4">
                        <div class="card-header">Create Knowledge Category</div>
                        <div class="card-body">
                            <form method="POST" action="<?php echo base_url('knowledge_category/store') ?>" enctype="multipart/form-data">
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Code</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="category_code" placeholder="Enter Category Code" required>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Icon</label>
                                    <div class="col-sm-10">
                                        <select name="category_icon" class="form-control" required>
                                            <option value="award">Award</option>
                                            <option value="bar-chart">Bar Chart</option>
                                            <option value="book-open">Book Open</option>
                                            <option value="cast">Cast</option>
                                            <option value="camera">Camera</option>
                                            <option value="check">Check</option>
                                            <option value="clipboard">Clipboard</option>
                                            <option value="columns">Columns</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Background</label>
                                    <div class="col-sm-10">
                                        <select name="category_background" class="form-control" required>
                                            <option value="primary">Primary</option>
                                            <option value="secondary">Secondary</option>
                                            <option value="teal">Teal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="category_title" placeholder="Enter Category Name" required>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea rows="5" class="form-control" type="text" name="category_description" required> </textarea>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select name="status" class="form-control" required>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary" type="button">Submit</button>
                                        <a href="<?php echo base_url('knowledge_category') ?>"><button class="btn btn-danger" type="button">Cancel</button></a><br><br>
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