        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container-xl px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <!-- Basic login form-->
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <!-- Login form-->
                                        <div class="text-center">
                                            <img src="<?= base_url('assets/img/logosumsel.png') ?>" alt="logo" width="50" height="60">
                                            <img src="<?= base_url('assets/img/kemendikbud.png') ?>" alt="logo" width="60" height="60">
                                        </div>
                                        </br>
                                        <div class="text-center">
                                            <h6 class="text-gray-900 mb-4">KNOWLEDGE MANAGEMENT SYSTEM </br>
                                                SEKSI PTK SMK </br>
                                                DINAS PENDIDIKAN PROVINSI SUMATERA SELATAN
                                            </h6>

                                        </div>
                                        <?php if ($this->session->flashdata('success')) { ?>
                                            <div class="alert alert-primary" role="alert"><?php echo $this->session->flashdata('success'); ?></div>
                                            <?php $this->session->unset_userdata('success'); ?>
                                        <?php } elseif ($this->session->flashdata('warning')) { ?>
                                            <div class="alert alert-warning" role="alert"><?php echo $this->session->flashdata('warning'); ?></div>
                                            <?php $this->session->unset_userdata('warning'); ?>
                                        <?php } ?>
                                        <form method="POST" action="<?php echo base_url('auth/login') ?>">
                                            <!-- Form Group (email address)-->
                                            <div class="mb-3">
                                                <div class="col-md-10" style="display: inline-block;">
                                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                    <input class="form-control" id="inputEmailAddress" type="email" name="email" placeholder="Enter email address" required />
                                                </div>
                                                <div class="col-md-1" style="display: inline-block;">
                                                    <i style="margin-left: 20px;" data-feather="mail"></i>
                                                </div>
                                            </div>
                                            <!-- Form Group (password)-->
                                            <div class="mb-3">
                                                <div class="col-md-10" style="display: inline-block;">
                                                    <label class="small mb-1" for="inputPassword">Password</label>
                                                    <input class="form-control" type="password" name="password" placeholder="Enter password" id="pass" required />
                                                </div>
                                                <div class="col-md-1" style="display: inline-block;">
                                                    <span id="mybutton" onclick="change()"><i style="margin-left: 20px;" data-feather="eye"></i></span>

                                                </div>
                                            </div>
                                            <!-- Form Group (remember password checkbox)-->
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="rememberPasswordCheck" type="checkbox" value="" />
                                                    <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <!-- Form Group (login box)-->
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="#">Forgot Password?</a>
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
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
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="footer-admin mt-auto footer-dark">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-md-6 small">Copyright © Your Website 2021</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                ·
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>