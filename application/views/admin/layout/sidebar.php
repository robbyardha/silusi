<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="<?= base_url('assets/images/profile/') . $current_user['image'] ?>" alt="user-img" title="Ardhacodes" class="rounded-circle img-thumbnail avatar-md">
            <div class="dropdown">
                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown" aria-expanded="false"><?= $current_user['email'] ?></a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <a href="<?= base_url('admin/profile') ?>"><span>My Account</span></a>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock mr-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted"><?= $current_user['nama'] ?></p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="<?= base_url('admin/profile') ?>" class="text-muted">
                        <i class="mdi mdi-cog"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="<?= base_url('admin/profile/changepassword') ?>" class="text-muted">
                        <i class="mdi mdi-key-variant"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="<?= base_url('admin/auth/logout') ?>">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">
                <!-- menu dashboard -->
                <li class="menu-title">Dashboard</li>

                <li>
                    <a href="<?= base_url('admin/admin') ?>">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <!-- menu master data -->
                <li class="menu-title">Master Data</li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-page-layout-sidebar-left"></i>
                        <span> Master Data </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="<?= base_url('admin/sekolah') ?>">Sekolah</a></li>
                        <li><a href="<?= base_url('admin/tahunajaran') ?>">Tahun Ajaran</a></li>
                        <li><a href="<?= base_url('admin/mapel') ?>">Mata Pelajaran</a></li>
                        <li><a href="<?= base_url('admin/siswa') ?>">Siswa</a></li>
                        <li><a href="<?= base_url('admin/pengumuman') ?>">Pengumuman</a></li>
                    </ul>
                </li>

                <!-- Menu Konten Kelulusan -->
                <li class="menu-title">Kelulusan</li>

                <li>
                    <a href="<?= base_url('admin/jadwal_pengumuman') ?>">
                        <i class="mdi mdi-format-font"></i>
                        <span> Atur Jadwal Pengumuman </span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/nilai_ujian') ?>">
                        <i class="mdi mdi-view-list"></i>
                        <span> Import Nilai </span>
                    </a>
                </li>

                <!-- Menu Profile -->
                <li class="menu-title">Profile</li>
                <li>
                    <a href="<?= base_url('admin/profile') ?>">
                        <i class="mdi mdi-face-profile"></i>
                        <span class="badge badge-purple float-right">New</span>
                        <span> Profile </span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/profile/changepassword') ?>">
                        <i class="mdi mdi-key-variant"></i>
                        <span class="badge badge-purple float-right">New</span>
                        <span> Change Password </span>
                    </a>
                </li>

                <!-- <li class="menu-title">Components</li>

                <li>
                    <a href="ui-typography.html">
                        <i class="mdi mdi-format-font"></i>
                        <span> Typography </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-invert-colors"></i>
                        <span> User Interface </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-draggable-cards.html">Draggable Cards</a></li>
                        <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                        <li><a href="ui-material-icons.html">Material Design</a></li>
                        <li><a href="ui-font-awesome-icons.html">Font Awesome 5</a></li>
                        <li><a href="ui-dripicons.html">Dripicons</a></li>
                        <li><a href="ui-feather-icons.html">Feather Icons</a></li>
                        <li><a href="ui-themify-icons.html">Themify Icons</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-notification.html">Notification</a></li>
                        <li><a href="ui-range-slider.html">Range Slider</a></li>
                        <li><a href="ui-components.html">Components</a>
                        <li><a href="ui-sweetalert.html">Sweet Alert</a>
                        <li><a href="ui-treeview.html">Tree view</a>
                        <li><a href="ui-widgets.html">Widgets</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-texture"></i>
                        <span class="badge badge-warning float-right">7</span>
                        <span> Forms </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="form-elements.html">General Elements</a></li>
                        <li><a href="form-advanced.html">Advanced Form</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-fileupload.html">Form Uploads</a></li>
                        <li><a href="form-quilljs.html">Quilljs Editor</a></li>
                        <li><a href="form-xeditable.html">X-editable</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-view-list"></i>
                        <span> Tables </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Tables</a></li>
                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                        <li><a href="tables-editable.html">Editable Table</a></li>
                        <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-chart-donut-variant"></i>
                        <span> Charts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="charts-flot.html">Flot Charts</a></li>
                        <li><a href="charts-morris.html">Morris Charts</a></li>
                        <li><a href="charts-chartist.html">Chartist Charts</a></li>
                        <li><a href="charts-chartjs.html">Chartjs Charts</a></li>
                        <li><a href="charts-other.html">Other Charts</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-file-multiple"></i>
                        <span> Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="pages-starter.html">Starter Page</a></li>
                        <li><a href="pages-login.html">Login</a></li>
                        <li><a href="pages-register.html">Register</a></li>
                        <li><a href="pages-recoverpw.html">Recover Password</a></li>
                        <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                        <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                        <li><a href="pages-404.html">Error 404</a></li>
                        <li><a href="pages-500.html">Error 500</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-layers"></i>
                        <span> Extra Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="extras-projects.html">Projects</a></li>
                        <li><a href="extras-tour.html">Tour</a></li>
                        <li><a href="extras-taskboard.html">Taskboard</a></li>
                        <li><a href="extras-taskdetail.html">Task Detail</a></li>
                        <li><a href="extras-profile.html">Profile</a></li>
                        <li><a href="extras-maps.html">Maps</a></li>
                        <li><a href="extras-contact.html">Contact list</a></li>
                        <li><a href="extras-pricing.html">Pricing</a></li>
                        <li><a href="extras-timeline.html">Timeline</a></li>
                        <li><a href="extras-invoice.html">Invoice</a></li>
                        <li><a href="extras-faq.html">FAQs</a></li>
                        <li><a href="extras-gallery.html">Gallery</a></li>
                        <li><a href="extras-email-templates.html">Email Templates</a></li>
                        <li><a href="extras-maintenance.html">Maintenance</a></li>
                        <li><a href="extras-comingsoon.html">Coming Soon</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-share-variant"></i>
                        <span> Multi Level </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level nav" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);">Level 1.1</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-third-level nav" aria-expanded="false">
                                <li>
                                    <a href="javascript: void(0);">Level 2.1</a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);">Level 2.2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->