<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title">Import Data Mata Pelajaran</h4>
                        <!-- <p class="sub-header">
                            Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                        </p> -->
                        <div class="row">
                            <div class="col-12">
                                <p>Untuk Format Import Excel dapat didownload melalui button berikut</p>
                                <a href="<?= base_url('admin/mapel/downloadFormat') ?>" class="btn btn-primary">Download Data</a>
                                <div class="p-2">
                                    <?php echo form_open_multipart('admin/mapel/import', array('name' => 'spreadsheet')); ?>
                                    <br>
                                    <input type="file" class="dropify" data-height="300" data-allowed-file-extensions="xls xlsx csv" name="upload_file"></input>
                                    <br>
                                    <div class="pt-1 d-flex justify-content-end">
                                        <a href="<?= base_url('dashboard/home') ?>" class="btn btn-secondary mr-1">Batal</a>
                                        <button type="submit" class="btn btn-success btn-raised ml-1">Import</a>
                                    </div>
                                    <?php echo form_close(); ?>
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
                    2016 - 2020 &copy; Adminto theme by <a href="">Coderthemes</a>
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