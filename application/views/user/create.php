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
                                        <a href="<?php echo base_url('user') ?>">User List</a> &nbsp;- Create User
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container-xl px-4">
                    <div class="card mb-4">
                        <div class="card-header">Create User</div>
                        <div class="card-body">
                            <form method="POST" action="<?php echo base_url('user/store') ?>" enctype="multipart/form-data">
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">NIP</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="nip" placeholder="Enter NIP" required>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name" placeholder="Enter Name" required>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" name="email" placeholder="Enter Email" required>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Position</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="position" placeholder="Enter Position">
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="image">
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Birth Place</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="birth_place" placeholder="Enter Birth Place">
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Religion</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="religion" placeholder="Enter Religion">
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Sex</label>
                                    <div class="col-sm-10">
                                        <select name="sex" class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="1">Male</option>
                                            <option value="0">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea name="address" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="phone_number" class="form-control" placeholder="Enter phone number">
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        <select name="role_id" class="form-control" required>
                                            <?php if ($this->session->userdata('role_id') != 0) { ?>
                                                <option value="0">Administrator</option>
                                                <option value="1">Kasi</option>
                                            <?php } ?>
                                            <option value="">Select</option>
                                            <option value="2">Staff Ahli</option>
                                            <option value="3">Visitor</option>
                                        </select>
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
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label">Re-Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password_confirm" class="form-control" placeholder="Enter password confirm" required>
                                    </div>
                                </div><br>
                                <div class="mb-3 form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary" type="button">Submit</button>
                                        <a href="<?php echo base_url('user') ?>"><button class="btn btn-danger" type="button">Cancel</button></a><br><br>
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