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
                                <a class="form-control" href="<?php echo base_url('uploads/explicit_knowledge/');
                                                                echo $explicit_knowledge->file ?>"><?php echo $explicit_knowledge->file ?></a>
                            </div>
                        </div>
                        <div class="mb-3 form-group row">
                            <label class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="editor" rows="7" class="form-control" required><?php echo $explicit_knowledge->content ?></textarea>
                            </div>
                        </div>
                        <br>
                        <!-- <div class="mb-3 form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <a href="<?php echo base_url('explicit_knowledge') ?>"><button class="btn btn-primary" type="button">Back to List</button></a><br><br>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="container-xl px-4">
                <!-- Knowledge base article-->
                <div class="card mb-4">
                    <div class="card-header">Comments</div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">

                                <div class="message-wrap col-lg-12">
                                    <div class="msg-wrap">
                                        <?php foreach ($explicit_comments as $key => $value) { ?>
                                            <div class="media msg " style="align-items: center;">
                                                <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="<?php echo base_url('uploads/user/');
                                                                                                                                                            echo $value->image ?>">
                                                <small class="pull-right time"><i class="fa fa-clock"></i> <?php echo $value->created_at ?></small>
                                                <h5 class="media-heading"><?php echo $value->name ?></h5>
                                                <div class="media-body">
                                                    <small class="col-lg-10"><?php echo $value->content ?></small>
                                                </div>
                                            </div>
                                            <hr>
                                        <?php } ?>

                                    </div><br>
                                    <form action="<?php echo base_url('explicit_knowledge/store_comment/');
                                                    echo $explicit_knowledge->id; ?>" method="POST">
                                        <div class="send-wrap ">
                                            <textarea class="form-control send-message" name="comment" rows="3" placeholder="Write a reply..." required></textarea>
                                        </div> <br>
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php $this->load->view('components/footer') ?>
    </div>
</div>