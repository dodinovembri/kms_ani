<?php $this->load->view('components/topbar') ?>
<div id="layoutSidenav">
    <?php $this->load->view('components/sidebar') ?>
    <div id="layoutSidenav_content">
        <main>
        <br>
            <!-- Main page content-->
            <div class="container-xl px-4">
                <div class="card mb-4">
                    <div class="container-xl px-4">
                        <!-- Knowledge base category-->
                        <h2 class="mb-0 mt-4"><?php echo $help->title ?></h2>
                        <hr class="mt-2 mb-4" />
                        <!-- Knowledge base item-->
                        <textarea name="" id="editor" cols="30" rows="10" disabled><?php echo $help->content ?></textarea>
                        <br>
                    </div>
                </div>
            </div>
            <div class="container-xl px-4">
                <div class="card mb-4">
                    <div class="container-xl px-4">
                        <!-- Knowledge base category-->
                        <div class="msg-wrap">
                        <h2 class="mb-0 mt-4">Comments</h2>
                        <br>
                            <?php foreach ($help_comments as $key => $value) { ?>
                                <div class="media msg " style="align-items: center;">
                                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="<?php echo base_url('uploads/user/'); echo $value->image ?>">
                                    <small class="pull-right time"><i class="fa fa-clock"></i> <?php echo $value->created_at ?></small>
                                    <h5 class="media-heading"><?php echo $value->name ?></h5>
                                    <div class="media-body">
                                        <small class="col-lg-10"><?php echo $value->content ?></small>
                                    </div>
                                </div>
                                <hr>
                            <?php } ?>

                        </div><br>
                        <!-- Knowledge base item-->
                        <form action="<?php echo base_url('help_comment/store/'); echo $help->id ?>" method="POST">
                            <div class="send-wrap ">
                                <textarea class="form-control send-message" name="comment" rows="5" placeholder="Write a reply..."></textarea>
                            </div> <br>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>            
            
        </main>
        <?php $this->load->view('components/footer') ?>
    </div>
</div>