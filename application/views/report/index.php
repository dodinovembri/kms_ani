<?php $this->load->view('components/topbar') ?>
<div id="layoutSidenav">
    <?php $this->load->view('components/sidebar') ?>
    <div id="layoutSidenav_content">
        <main>
            <br>
            <!-- Main page content-->
            <div class="container-xl px-4">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Bar chart example-->
                        <div class="card mb-4">
                            <div class="card-header">Laporan Tacit Knowledge</div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <!-- <table id="" class="table"> -->
                                <center><h6>Per Bulan</h6></center>
                                    <thead>
                                        <tr>
                                            <th>Waktu</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;
                                        foreach ($tacit_knowledges as $key => $value) {
                                            $no++; ?>
                                            <tr>
                                                <?php $month = substr($value->tanggal, 4);
                                                $dateObj   = DateTime::createFromFormat('!m', $month);
                                                $monthName = $dateObj->format('F'); // March
                                                ?>
                                                <td><?= $monthName ?></td>
                                                <td><?= $value->total ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                
                            </div>
                            <hr>
                            <div class="card-body">
                                <table id="datatablesSimple3">
                                <!-- <table id="" class="table"> -->
                                    <center><h6>Per Category</h6></center>
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;
                                        foreach ($tacit_category_knowledges as $key => $value) {
                                            $no++; ?>
                                            <tr>
                                                <td><?= $value->category_code ?></td>
                                                <td><?= $value->total ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Pie chart example-->
                        <div class="card mb-4">
                            <div class="card-header">Laporan Explicit Knowledge</div>
                            <div class="card-body">
                                <table id="datatablesSimple2">
                                <!-- <table id="" class="table"> -->
                                    <center><h6>Per BUlan</h6></center>
                                    <thead>
                                        <tr>
                                            <th>Waktu</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;
                                        foreach ($explicit_knowledges as $key => $value) {
                                            $no++; ?>
                                            <tr>
                                                <?php $month = substr($value->tanggal, 4);
                                                $dateObj   = DateTime::createFromFormat('!m', $month);
                                                $monthName = $dateObj->format('F'); // March
                                                ?>
                                                <td><?= $monthName ?></td>
                                                <td><?= $value->total ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="card-body">
                                <table id="datatablesSimple4">
                                <!-- <table id="" class="table"> -->
                                    <center><h6>Per Category</h6></center>
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;
                                        foreach ($explicit_category_knowledges as $key => $value) {
                                            $no++; ?>
                                            <tr>
                                                <td><?= $value->category_code ?></td>
                                                <td><?= $value->total ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('components/footer') ?>
    </div>
</div>