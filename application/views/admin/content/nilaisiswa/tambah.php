<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title">Tambah Data Nilai Ujian</h4>
                        <!-- <p class="sub-header">
                            Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                        </p> -->
                        <div class="row">
                            <div class="col-12">
                                <?= $this->session->flashdata('message') ?>
                                <div class="p-2">
                                    <form action="" method="POST">
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="nama_siswa">Nama Siswa</label>
                                            <div class="col-md-10">
                                                <?php
                                                // var_dump($mapel);
                                                // die;
                                                // 
                                                ?>
                                                <select class="form-control classselect2" id="nama_siswa" name="nama_siswa">
                                                    <?php foreach ($siswa as $s) : ?>
                                                        <option value="<?= $s['id'] ?>"><?= " (" .  $s['nis'] . ")" . " " . $s['nama'] ?></option>
                                                    <?php endforeach ?>
                                                    <br>
                                                    <?= form_error('siswa', '<small class="text-danger">', '</small>') ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="mapel">Mata Pelajaran</label>
                                            <div class="col-md-10">
                                                <select class="form-control classselect2" id="mapel" name="mapel">
                                                    <?php foreach ($mapel as $m) : ?>
                                                        <option value="<?= $m['id'] ?>"><?= $m['nama_mapel'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="nilai_rapot">Nilai Siswa</label>
                                            <div class="col-md-10">
                                                <table class="table">
                                                    <thead>
                                                        <th>Nilai Rapot</th>
                                                        <th>NUSP</th>
                                                        <th>NSP</th>
                                                        <th>AVG</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="number" class="form-control col-5" id="nilai_rapot" name="nilai_rapot" onkeyup="getAverage();">
                                                                <br>
                                                                <?= form_error('nilai_rapot', '<small class="text-danger">', '</small>') ?>
                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control col-5" id="nusp" name="nusp" onkeyup="getAverage();">
                                                                <br>
                                                                <?= form_error('nusp', '<small class="text-danger">', '</small>') ?>
                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control col-5" id="nsp" name="nsp" onkeyup="getAverage();">
                                                                <br>
                                                                <?= form_error('nsp', '<small class="text-danger">', '</small>') ?>
                                                            </td>
                                                            <td>
                                                                <input type="number" readonly class="form-control col-6" id="avg" name="avg">
                                                                <br>
                                                                <?= form_error('avg', '<small class="text-danger">', '</small>') ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="status_lulus">Status Kelulusan</label>
                                            <div class="col-md-10">
                                                <select class="form-control" id="status_lulus" name="status_lulus">
                                                    <option value="Lulus">Lulus</option>
                                                    <option value="Tidak Lulus">Tidak Lulus</option>
                                                </select>
                                                <?= form_error('status_lulus', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>

                                        <div class="pt-1 d-flex justify-content-end">
                                            <a href="<?= base_url('admin/nilai_ujian') ?>" class="btn btn-secondary mr-1">Batal</a>
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