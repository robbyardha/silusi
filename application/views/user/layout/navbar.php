<!--Navbar Start-->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
    <div class="container-fluid">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="index.html">
            <img src="images/logo-light.png" alt="" class="logo-light" height="18" />
            <img src="images/logo-dark.png" alt="" class="logo-dark" height="18" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                <li class="nav-item <?php if ($this->uri->segment(1) == "Home") {
                                        echo "active";
                                    } ?>">
                    <a href="<?= base_url('Home') ?>" class="nav-link ">Home</a>
                </li>
                <li class="nav-item <?php if ($this->uri->segment(1) == "Pengumumanuser") {
                                        echo "active";
                                    } ?>">
                    <a href="<?= base_url('Pengumumanuser') ?>" class="nav-link ">Pengumuman</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('user/content/cetak_skl')?> " class="nav-link">Services</a>
                </li>
                <!--<li class="nav-item">
                    <a href="#demo" class="nav-link">Demos</a>
                </li>
                <li class="nav-item">
                    <a href="#clients" class="nav-link">Clients</a>
                </li>
                <li class="nav-item">
                    <a href="#pricing" class="nav-link">Pricing</a>
                </li>

                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->