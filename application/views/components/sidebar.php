        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PTK SMK</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if ($this->uri->segment(1) == "home")  echo "active"; ?>">
                <a class="nav-link" href="<?= base_url('home') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">Knowledge</div>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('tacit_knowledge') ?>">
                    <i class="fas fa-users"></i>
                    <span>Tacit Knowledge</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('explicit_knowledge') ?>">
                    <i class="fas fa-users"></i>
                    <span>Explicit Knowledge</span></a>
            </li>

            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">Setup Configuration</div>
            <li class="nav-item <?php if ($this->uri->segment(1) == "user")  echo "active"; ?>">
                <a class="nav-link" href="<?= base_url('user') ?>">
                    <i class="fas fa-users"></i>
                    <span>Users</span></a>
            </li>
        
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">Help</div>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-users"></i>
                    <span>Helps</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->