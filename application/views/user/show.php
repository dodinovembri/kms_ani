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
                                    <a href="<?php echo base_url('user') ?>">User List</a> &nbsp;- Detail
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container-xl px-4 mt-4">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">Profile Picture</div>
                            <div class="card-body text-center">
                                <img class="img-account-profile rounded-circle mb-2" src="<?php echo base_url('uploads/user/'); echo $user->image ?>" alt="" />
                                <div class="small font-italic text-muted"><?php echo $user->name; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card mb-4">
                            <div class="card-header">Account Details</div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="small mb-1">NIP</label>
                                        <input class="form-control" type="text" value="<?php echo $user->nip; ?>" />
                                    </div>                                    
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1">Email</label>
                                            <input class="form-control" type="text" value="<?php echo $user->email; ?>" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1">Position</label>
                                            <input class="form-control" type="text" value="<?php echo $user->position; ?>" />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1">Sex</label>
                                        <input class="form-control" type="text" value="<?php echo check_sex($user->sex) ?>" />
                                    </div> 
                                    <div class="mb-3">
                                        <label class="small mb-1">Birth Place</label>
                                        <textarea rows="3" class="form-control"><?php echo $user->birth_place; ?></textarea>
                                    </div>
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1">Religion</label>
                                            <input class="form-control" type="text" value="<?php echo $user->religion; ?>" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1">Phone Number</label>
                                            <input class="form-control" type="text" name="phone_number" value="<?php echo $user->phone_number; ?>" />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1">Address</label>
                                        <textarea rows="3" class="form-control"><?php echo $user->address; ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1">Status</label>
                                        <input class="form-control" type="text" value="<?php echo check_status($user->status) ?>" />
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