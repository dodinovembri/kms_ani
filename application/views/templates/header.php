<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - KMS PTK SMK</title>
        <link href="<?php echo base_url('assets/cdn.jsdelivr.net/npm/simple-datatables%40latest/dist/style.css') ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css') ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/assets/img/favicon.png') ?>" />
        <script data-search-pseudo-elements="" defer="" src="<?php echo base_url('assets/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js') ?>" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js') ?>" crossorigin="anonymous"></script>            
    </head>
    <?php if ($this->session->userdata('logged_in') != 1) { ?>
        <body class="bg-primary">
    <?php }else{ ?>
        <body class="nav-fixed">
    <?php } ?>