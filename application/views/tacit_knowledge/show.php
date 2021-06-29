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
                    <div class="card-header"><?php echo $tacit_knowledge->title ?></div>
                    <div class="card-body">
                        <p><?php echo $tacit_knowledge->content ?></p>
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
                                        <?php foreach ($tacit_comments as $key => $value) { ?>
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
                                    <form action="<?php echo base_url('tacit_knowledge/store_comment/');
                                                    echo $tacit_knowledge->id; ?>" method="POST">
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