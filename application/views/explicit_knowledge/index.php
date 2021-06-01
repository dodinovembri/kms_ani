<?php $this->load->view('components/topbar') ?>
    <div id="layoutSidenav">
        <?php $this->load->view('components/sidebar') ?>
        <div id="layoutSidenav_content">
            <main>
                <br>
                <!-- Main page content-->
                <div class="container-xl px-4">
                    <div class="card mb-4">
                        <div class="card-header">Explicit Knowledge List</div>
                        <div class="card-body">
                            <a href="<?php echo base_url('explicit_knowledge/create') ?>"><button class="btn btn-primary" type="button">Create New</button></a><br><br>
                            <?php if ($this->session->flashdata('success')) { ?>
                                <div class="alert alert-primary" role="alert"><?php echo $this->session->flashdata('success'); ?></div>
                                <?php $this->session->unset_userdata('success'); ?>
                            <?php } elseif ($this->session->flashdata('warning')) { ?>
                                <div class="alert alert-warning" role="alert"><?php echo $this->session->flashdata('warning'); ?></div>
                                <?php $this->session->unset_userdata('warning'); ?>
                            <?php } ?>
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>File</th>
                                        <th>Status</th>
                                        <th>Creator</th>
                                        <th>Created At</th>
                                        <th style="width:50%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
                                    foreach ($explicit_knowledges as $key => $value) {
                                        $no++; ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $value->knowledge_category_id ?></td>
                                            <td><?= $value->title ?></td>
                                            <td><a target="_blank" href="<?php echo base_url('uploads/explicit_knowledge/'); echo $value->file; ?>"><?= $value->file ?></a></td>
                                            <td><?= check_status($value->status) ?></td>
                                            <td><?= $value->creator_id ?></td>
                                            <td><?= $value->created_at ?></td>
                                            <td>
                                                <a href="<?php echo base_url('explicit_knowledge/show/'); echo $value->id; ?>"><button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="eye"></i></button></a>
                                                <a href="<?php echo base_url('explicit_knowledge/edit/'); echo $value->id; ?>"><button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="edit"></i></button></a>
                                                <a href="#"><button class="btn btn-datatable btn-icon btn-transparent-dark" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $value->id; ?>"><i data-feather="trash-2"></i></button></a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="exampleModal<?php echo $value->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Cofirm</h5>
                                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">Are you sure to delete this data?</div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                                                        <a href="<?php echo base_url('explicit_knowledge/destroy/'); echo $value->id; ?>"><button class="btn btn-danger" type="button">Delete Data</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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