<?php $this->load->view('components/topbar') ?>
<div id="layoutSidenav">
    <?php $this->load->view('components/sidebar') ?>
    <div id="layoutSidenav_content">
        <main>
            <br>
            </header>
            <div class="container-xl px-4 mt-4">
            <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-primary" role="alert"><?php echo $this->session->flashdata('success'); ?></div>
                <?php $this->session->unset_userdata('success'); ?>
            <?php } elseif ($this->session->flashdata('warning')) { ?>
                <div class="alert alert-warning" role="alert"><?php echo $this->session->flashdata('warning'); ?></div>
                <?php $this->session->unset_userdata('warning'); ?>
            <?php } ?>
                <div class="row">
                    <div class="col-xl-4">
                        <form method="POST" action="<?php echo base_url('profile/update/'); echo $profile->id; ?>" enctype="multipart/form-data">
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">Profile Picture</div>
                            <div class="card-body text-center">
                                <img class="img-account-profile rounded-circle mb-2" src="<?php echo base_url('uploads/user/'); echo $profile->image ?>" alt="" />
                                <div class="small font-italic text-muted"><?php echo $profile->name; ?></div>
                                <input class="form-control" type="file" name="image" value="<?php echo $profile->nip; ?>" />
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card mb-4">
                            <div class="card-header">Account Details</div>
                            <div class="card-body">
                                    <div class="mb-3">
                                        <label class="small mb-1">NIP</label>
                                        <input class="form-control" type="text" value="<?php echo $profile->nip; ?>" readonly>
                                    </div>      
                                    <div class="mb-3">
                                        <label class="small mb-1">Name</label>
                                        <input class="form-control" type="text" name="name" value="<?php echo $profile->name; ?>" required>
                                    </div>                               
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1">Email</label>
                                            <input class="form-control" type="text" name="email" value="<?php echo $profile->email; ?>" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1">Position</label>
                                            <input class="form-control" type="text" name="position" value="<?php echo $profile->position; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1">Sex</label>
                                        <select name="sex" class="form-control" required>
                                            <?php if ($value->sex == 0) { ?>
                                                <option value="0">Female</option>
                                                <option value="1">Male</option>
                                            <?php }elseif ($value->sex == 1) { ?>
                                                <option value="1">Male</option>
                                                <option value="0">Female</option>
                                            <?php } ?>
                                        </select>
                                    </div> 
                                    <div class="mb-3">
                                        <label class="small mb-1">Birth Place</label>
                                        <textarea rows="3" class="form-control" name="birth_place"><?php echo $profile->birth_place; ?></textarea>
                                    </div>
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1">Religion</label>
                                            <input class="form-control" type="text" name="religion" value="<?php echo $profile->religion; ?>" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1">Phone Number</label>
                                            <input class="form-control" type="text" name="phone_number" value="<?php echo $profile->phone_number; ?>" />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1">Address</label>
                                        <textarea rows="3" class="form-control" name="address"><?php echo $profile->address; ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary" type="button">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('components/footer') ?>
    </div>
</div>