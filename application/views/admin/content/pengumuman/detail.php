<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title">Detail Data Pengumuman <?= $pengumuman['judul'] ?> </h4>
                        <!-- <p class="sub-header">
                            Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                        </p> -->
                        <div class="row">
                            <div class="col-12">
                                <?php
                                date_default_timezone_set('Asia/Jakarta');
                                $current_date = $pengumuman['created_date'];
                                $newdate = date('D, d F Y H:i:s', strtotime($current_date));
                                ?>
                                <h2 class="text-center"><strong class="badge badge-pills badge-success"><?= $pengumuman['judul'] ?></strong></h2>
                                <textarea name="pengumuman" id="pengumuman" cols="30" rows="20" class="form-control" readonly><?= $pengumuman['pengumuman'] ?></textarea>
                                <p>created by : <?= $pengumuman['created_by'] ?></p>
                                <p>created date : <?= $newdate ?></p>
                                <a href="<?= base_url('admin/pengumuman') ?>" class="btn btn-secondary mt-3">Batal</a>
                                <div class="p-2">
                                </div>

                            </div>
                            <!-- end row -->

                        </div> <!-- end card-box -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->
            </div>
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