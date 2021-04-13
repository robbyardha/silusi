<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title">Tambah Data Sekolah</h4>
                        <!-- <p class="sub-header">
                            Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                        </p> -->
                        <div class="row">
                            <div class="col-12">
                                <?= $this->session->flashdata('message') ?>
                                <div class="p-2">
                                    <?= form_open_multipart('admin/sekolah') ?>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="nama_sekolah">Nama Sekolah</label>
                                        <div class="col-md-10">
                                            <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control">
                                            <?= form_error('nama_sekolah', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="alamat_sekolah">Alamat Sekolah</label>
                                        <div class="col-md-10">
                                            <input type="text" name="alamat_sekolah" id="alamat_sekolah" class="form-control">
                                            <?= form_error('alamat_sekolah', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="notlp_sekolah">No Tlp Sekolah</label>
                                        <div class="col-md-10">
                                            <input type="text" name="notlp_sekolah" id="notlp_sekolah" class="form-control">
                                            <?= form_error('notlp_sekolah', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="file_image">Logo Sekolah</label>
                                        <div class="col-md-10">
                                            <input type="file" class="dropify" data-height="150" data-allowed-file-extensions="jpeg jpg png" id="file_image" name="file_image"></input>
                                            <small class="text-muted">File Harus Berupa <strong>JPEG, JPG, dan PNG. MAX 1Mb</strong></small>
                                        </div>
                                    </div>

                                    <div class="pt-1 d-flex justify-content-end">
                                        <a href="<?= base_url('dashboard/home') ?>" class="btn btn-secondary mr-1">Batal</a>
                                        <button type="submit" class="btn btn-success btn-raised ml-1">Tambah</a>
                                    </div>
                                    <?= form_close() ?>
                                </div>
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