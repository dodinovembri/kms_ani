<?php $this->load->view('components/topbar') ?>
<div id="layoutSidenav">
    <?php $this->load->view('components/sidebar') ?>
    <div id="layoutSidenav_content">
        <main>
            <br>
            <!-- Main page content-->
            <div class="container-xl px-4">
                <div class="card mb-4">
                    <div class="card-header">Change Password</div>
                    <div class="card-body">
                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-primary" role="alert"><?php echo $this->session->flashdata('success'); ?></div>
                            <?php $this->session->unset_userdata('success'); ?>
                        <?php } elseif ($this->session->flashdata('warning')) { ?>
                            <div class="alert alert-warning" role="alert"><?php echo $this->session->flashdata('warning'); ?></div>
                            <?php $this->session->unset_userdata('warning'); ?>
                        <?php } ?>
                        <form method="POST" action="<?php echo base_url('profile/update_password') ?>" enctype="multipart/form-data">
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pass" required>
                                </div>
                                <div class="col-sm-1" style="margin-top: 12px;">
                                    <span id="mybutton" onclick="change()"><i style="margin-left: 20px;" data-feather="eye"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label">Re-Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password_confirm" class="form-control" placeholder="Enter password confirm" id="pass2" required>
                                </div>
                                <div class="col-sm-1" style="margin-top: 12px;">
                                    <span id="mybutton2" onclick="change2()"><i style="margin-left: 20px;" data-feather="eye"></i></span>
                                </div>
                            </div><br>
                            <div class="mb-3 form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary" type="button">Submit</button>
                                    <a href="<?php echo base_url('home') ?>"><button class="btn btn-danger" type="button">Cancel</button></a><br><br>
                                </div>
                            </div>
                            <br>
                        </form>
                        <script>
                            function change() {
                                var x = document.getElementById('pass').type;

                                if (x == 'password') {
                                    document.getElementById('pass').type = 'text';
                                } else {
                                    document.getElementById('pass').type = 'password';
                                }
                            }

                            function change2() {
                                var x = document.getElementById('pass2').type;

                                if (x == 'password') {
                                    document.getElementById('pass2').type = 'text';
                                } else {
                                    document.getElementById('pass2').type = 'password';
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('components/footer') ?>
    </div>
</div>