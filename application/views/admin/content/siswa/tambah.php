<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title">Tambah Data Siswa</h4>
                        <!-- <p class="sub-header">
                            Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                        </p> -->
                        <div class="row">
                            <div class="col-12">
                                <?= $this->session->flashdata('message') ?>
                                <div class="p-2">
                                    <form action="" method="POST">
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="nis">NIS</label>
                                            <div class="col-md-10">
                                                <input type="number" name="nis" id="nis" class="form-control">
                                                <small class="text-muted">NIS Harus berupa angka!</small>
                                                <?= form_error('nis', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="nomor_ujian">Nomor Ujian</label>
                                            <div class="col-md-10">
                                                <input type="text" name="nomor_ujian" id="nomor_ujian" class="form-control">
                                                <small class="text-muted">contoh: 2-17-18-2021-2222201</small>
                                                <?= form_error('nomor_ujian', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="nama">Nama Siswa</label>
                                            <div class="col-md-10">
                                                <input type="text" name="nama" id="nama" class="form-control">
                                                <small class="text-muted">contoh: Agus</small>
                                                <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="tempat_lahir">Tempat Lahir</label>
                                            <div class="col-md-10">
                                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                                                <small class="text-muted">contoh: Sidoarjo</small>
                                                <?= form_error('tempat_lahir', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="tgl_lahir">Tanggal Lahir</label>
                                            <div class="col-md-10">
                                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                                                <small class="text-muted">contoh: 12/04/2021</small>
                                                <?= form_error('tgl_lahir', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>

                                        <div class="pt-1 d-flex justify-content-end">
                                            <a href="<?= base_url('dashboard/home') ?>" class="btn btn-secondary mr-1">Batal</a>
                                            <button type="submit" class="btn btn-success btn-raised ml-1">Tambah</a>
                                        </div>
                                    </form>
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