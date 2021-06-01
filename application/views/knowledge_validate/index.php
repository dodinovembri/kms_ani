<?php $this->load->view('components/topbar') ?>
    <div id="layoutSidenav">
        <?php $this->load->view('components/sidebar') ?>
        <div id="layoutSidenav_content">
            <main>
                <br>
                <!-- Main page content-->
                <div class="container-xl px-4">
                    <div class="card mb-4">
                        <div class="card-header">Knowledge List</div>
                        <div class="card-body">
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
                                        <th>Creator</th>
                                        <th>Created At</th>
                                        <th style="width:50%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
                                    foreach ($knowledges as $key => $value) {
                                        $no++; ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $value->knowledge_category_id ?></td>
                                            <td><?= $value->title ?></td>
                                            <td><?= $value->creator_id ?></td>
                                            <td><?= $value->created_at ?></td>
                                            <td>
                                                <a href="
                                                <?php if ($value->is_tacit == 1) {
                                                    echo base_url('knowledge_validate/show/tacit/'); echo $value->id;   
                                                }else {
                                                    echo base_url('knowledge_validate/show/explicit/'); echo $value->id;   
                                                } ?>
                                                "><button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="eye"></i></button></a>
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