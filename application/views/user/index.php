    <?php $this->load->view('components/topbar') ?>
    <div id="layoutSidenav">
        <?php $this->load->view('components/sidebar') ?>
        <div id="layoutSidenav_content">
            <main>
                <br>
                <!-- Main page content-->
                <div class="container-xl px-4">
                    <div class="card mb-4">
                        <div class="card-header">Users List</div>
                        <div class="card-body">
                            <a href="<?php echo base_url('user/create') ?>"><button class="btn btn-primary" type="button">Create New</button></a><br><br>
                            <?php if ($this->session->flashdata('success')) { ?>
                                <div class="alert alert-primary" role="alert"><?php echo $this->session->flashdata('success'); ?></div>
                            <?php } elseif ($this->session->flashdata('warning')) { ?>
                                <div class="alert alert-warning" role="alert"><?php echo $this->session->flashdata('warning'); ?></div>
                            <?php } ?>
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Position</th>
                                        <th>Role</th>
                                        <th style="width:50%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
                                    foreach ($users as $key => $value) {
                                        $no++; ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $value->nip ?></td>
                                            <td><?= $value->name ?></td>
                                            <td><?= $value->email ?></td>
                                            <td><?= $value->position ?></td>
                                            <td><?= check_role($value->role_id); ?></td>
                                            <td>
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="eye"></i></button>
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="edit"></i></button>
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php $this->load->view('components/footer') ?>
        </div>
    </div>