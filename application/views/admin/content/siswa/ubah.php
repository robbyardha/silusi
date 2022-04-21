<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title">Ubah Siswa</h4>
                        <!-- <p class="sub-header">
                            Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                        </p> -->
                        <div class="row">
                            <div class="col-12">
                                <?= $this->session->flashdata('message') ?>
                                <div class="p-2">
                                    <form action="" method="POST">
                                        <input type="hidden" name="id" id="id" class="form-control" value="<?= $siswa['id'] ?>">
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="nis">NIS</label>
                                            <div class="col-md-10">
                                                <input type="number" name="nis" id="nis" class="form-control" value="<?= $siswa['nis'] ?>">
                                                <small class="text-muted">NIS Harus berupa angka!</small>
                                                <?= form_error('nis', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="nomor_ujian">Nomor Ujian</label>
                                            <div class="col-md-10">
                                                <input type="text" name="nomor_ujian" id="nomor_ujian" class="form-control" value="<?= $siswa['nomor_ujian'] ?>">
                                                <small class="text-muted">contoh: 2-17-18-2021-2222201</small>
                                                <?= form_error('nomor_ujian', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="nama">Nama Siswa</label>
                                            <div class="col-md-10">
                                                <input type="text" name="nama" id="nama" class="form-control" value="<?= $siswa['nama'] ?>">
                                                <small class="text-muted">contoh: Agus</small>
                                                <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="tempat_lahir">Tempat Lahir</label>
                                            <div class="col-md-10">
                                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="<?= $siswa['tempat_lahir'] ?>">
                                                <small class="text-muted">contoh: Sidoarjo</small>
                                                <?= form_error('tempat_lahir', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="tanggal">Tanggal Lahir</label>
                                            <div class="col-md-10">
                                                <input type="text" name="tanggal" id="tanggal" class="form-control" value="<?= $siswa['tanggal'] ?>">
                                                <small class="text-muted">contoh: 05</small>
                                                <?= form_error('tanggal', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="bulan">Bulan Lahir</label>
                                            <div class="col-md-10">
                                                <select class="form-control classselect2" name="bulan" id="bulan">

                                                    <option <?php if ($siswa['bulan'] == "Januari") {
                                                                echo "selected";
                                                            } ?> value="Januari">Januari</option>
                                                    <option <?php if ($siswa['bulan'] == "Februari") {
                                                                echo "selected";
                                                            } ?> value="Februari">Februari</option>
                                                    <option <?php if ($siswa['bulan'] == "Maret") {
                                                                echo "selected";
                                                            } ?> value="Maret">Maret</option>
                                                    <option <?php if ($siswa['bulan'] == "April") {
                                                                echo "selected";
                                                            } ?> value="April">April</option>
                                                    <option <?php if ($siswa['bulan'] == "Mei") {
                                                                echo "selected";
                                                            } ?> value="Mei">Mei</option>
                                                    <option <?php if ($siswa['bulan'] == "Juni") {
                                                                echo "selected";
                                                            } ?> value="Juni">Juni</option>
                                                    <option <?php if ($siswa['bulan'] == "Juli") {
                                                                echo "selected";
                                                            } ?> value="Juli">Juli</option>
                                                    <option <?php if ($siswa['bulan'] == "Agustus") {
                                                                echo "selected";
                                                            } ?> value="Agustus">Agustus</option>
                                                    <option <?php if ($siswa['bulan'] == "September") {
                                                                echo "selected";
                                                            } ?> value="September">September</option>
                                                    <option <?php if ($siswa['bulan'] == "Oktober") {
                                                                echo "selected";
                                                            } ?> value="Oktober">Oktober</option>
                                                    <option <?php if ($siswa['bulan'] == "November") {
                                                                echo "selected";
                                                            } ?> value="November">November</option>
                                                    <option <?php if ($siswa['bulan'] == "Desember") {
                                                                echo "selected";
                                                            } ?> value="Desember">Desember</option>
                                                </select>
                                                <small class="text-muted">contoh: Februari</small>
                                                <?= form_error('bulan', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="tahun">Tahun Lahir</label>
                                            <div class="col-md-10">
                                                <input type="text" name="tahun" id="tahun" class="form-control" value="<?= $siswa['tahun'] ?>">
                                                <small class="text-muted">contoh: 2022</small>
                                                <?= form_error('tahun', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="tgl_lahir">Tanggal Lahir</label>
                                            <div class="col-md-10">
                                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?= $siswa['tgl_lahir'] ?>">
                                                <small class="text-muted">contoh: 12/04/2021</small>
                                                <?= form_error('tgl_lahir', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="kelas">Kelas</label>
                                            <div class="col-md-10">
                                                <input type="text" name="kelas" id="kelas" class="form-control" value="<?= $siswa['kelas'] ?>">
                                                <small class="text-muted">contoh: IPA</small>
                                                <?= form_error('kelas', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="status_keuangan">Status Keuangan</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="status_keuangan" id="status_keuangan">
                                                    <?php if ($siswa['status_keuangan'] == "Lunas") : ?>
                                                        <option value="Lunas" selected>Lunas</option>
                                                        <option value="Belum Lunas">Belum Lunas</option>
                                                    <?php elseif ($siswa['status_keuangan'] == "Belum Lunas") : ?>
                                                        <option value="Belum Lunas" selected>Belum Lunas</option>
                                                        <option value="Lunas">Lunas</option>
                                                    <?php endif ?>
                                                </select>
                                                <?= form_error('status_keuangan', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>

                                        <div class="pt-1 d-flex justify-content-end">
                                            <a href="<?= base_url('admin/siswa') ?>" class="btn btn-secondary mr-1">Batal</a>
                                            <button type="submit" class="btn btn-success btn-raised ml-1">Ubah</a>
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