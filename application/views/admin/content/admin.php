<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">

                <div class="col-xl-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <h4 class="header-title mt-0 mb-4">Total Siswa</h4>

                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1 float-left" dir="ltr">
                                <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#0566a3" data-bgColor="#7ebee6" value="<?= $nilai_count ?>" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                            </div>

                            <div class="widget-detail-1 text-right">
                                <h2 class="font-weight-normal pt-2 mb-1"> <?= $nilai_count ?> </h2>
                                <p class="text-muted mb-1">Siswa Aktif</p>
                            </div>
                        </div>
                    </div>

                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <h4 class="header-title mt-0 mb-4">Siswa Lulus</h4>

                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1 float-left" dir="ltr">
                                <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#02db72" data-bgColor="#8af2c0" value="<?= $nilai_countlulus ?>" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                            </div>

                            <div class="widget-detail-1 text-right">
                                <h2 class="font-weight-normal pt-2 mb-1"> <?= $nilai_countlulus ?> </h2>
                                <p class="text-muted mb-1">Siswa Lulus</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                        <h4 class="header-title mt-0 mb-4">Siswa Tidak Lulus</h4>
                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1 float-left" dir="ltr">
                                <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#750800" data-bgColor="#e37971" value="<?= $nilai_counttidaklulus ?>" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                            </div>
                            <div class="widget-detail-1 text-right">
                                <h2 class="font-weight-normal pt-2 mb-1"> <?= $nilai_counttidaklulus ?> </h2>
                                <p class="text-muted mb-1">Siswa Tidak Lulus</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                        <h4 class="header-title mt-0 mb-4">Siswa Lunas</h4>
                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1 float-left" dir="ltr">
                                <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#02db72" data-bgColor="#8af2c0" value="<?= $lunas ?>" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                            </div>
                            <div class="widget-detail-1 text-right">
                                <h2 class="font-weight-normal pt-2 mb-1"> <?= $lunas ?> </h2>
                                <p class="text-muted mb-1">Siswa Pembayaran Lunas</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->


                <div class="col-xl-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                        <h4 class="header-title mt-0 mb-4">Siswa Belum Lunas</h4>
                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1 float-left" dir="ltr">
                                <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#750800" data-bgColor="#e37971" value="<?= $belumlunas ?>" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                            </div>
                            <div class="widget-detail-1 text-right">
                                <h2 class="font-weight-normal pt-2 mb-1"> <?= $belumlunas ?> </h2>
                                <p class="text-muted mb-1">Siswa Belum Lunas</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

            </div><!-- end col -->
        </div>
        <div class="col-12">
            <canvas id="myChart"></canvas>
        </div>
    </div><!-- end col -->
    <!-- end row -->

</div> <!-- container-fluid -->

</div> <!-- content -->

<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <?php
                date_default_timezone_set('Asia/Jakarta');
                ?>
                2021 - <?= date('Y') ?>&copy;Copyright System by : <a href="https://ardhacodes.com" target="_blank">Ardhacodes</a>
            </div>
            <div class="col-md-6">
                <div class="text-md-right footer-links d-none d-sm-block">
                    <a href="javascript:void(0);">About Us</a>
                    <a href="javascript:void(0);">Help</a>
                    <a href="javascript:void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->