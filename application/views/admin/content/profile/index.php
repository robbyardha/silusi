<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title">Ubah Data Profile</h4>
                        <!-- <p class="sub-header">
                            Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                        </p> -->
                        <div class="row">
                            <div class="col-12">
                                <?= $this->session->flashdata('message') ?>
                                <div class="p-2">
                                    <?= form_open_multipart('admin/profile') ?>
                                    <div class="form-group row">
                                        <input type="hidden" id="id" name="id" value="<?= $current_user['id'] ?>">
                                        <label class="col-md-2 col-form-label" for="email">Email</label>
                                        <div class="col-md-10">
                                            <input type="text" name="email" id="email" class="form-control" readonly value="<?= $current_user['email'] ?>">
                                            <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="nama">Nama</label>
                                        <div class="col-md-10">
                                            <input type="text" name="nama" id="nama" class="form-control" value="<?= $current_user['nama'] ?>">
                                            <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="file_image">Foto Sekarang</label>
                                        <div class="col-md-10">
                                            <img class="img-thumbnail" style="height: 200px;" src="<?= base_url('assets/images/profile/') . $current_user['image'] ?>" alt="" srcset="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="file_image">Ubah Foto</label>
                                        <div class="col-md-10">
                                            <input type="file" class="dropify" data-height="150" data-allowed-file-extensions="jpeg jpg png" id="file_image" name="file_image"></input>
                                            <small class="text-muted">File Harus Berupa <strong>JPEG, JPG, dan PNG. MAX 1Mb</strong></small>
                                        </div>
                                    </div>

                                    <div class="pt-1 d-flex justify-content-end">
                                        <a href="<?= base_url('admin/profile') ?>" class="btn btn-secondary mr-1">Batal</a>
                                        <button type="submit" class="btn btn-success btn-raised ml-1">Ubah</a>
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