<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title">Ubah Data Mata Pelajaran</h4>
                        <!-- <p class="sub-header">
                            Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                        </p> -->
                        <div class="row">
                            <div class="col-12">
                                <?= $this->session->flashdata('message') ?>
                                <div class="p-2">
                                    <form action="" method="POST">
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="nama_mapel">Mata Pelajaran</label>
                                            <div class="col-md-10">
                                                <input type="hidden" name="id" id="id" class="form-control" value="<?= $mapel['id'] ?>">
                                                <input type="text" name="nama_mapel" id="nama_mapel" class="form-control" value="<?= $mapel['nama_mapel'] ?>">
                                                <?= form_error('nama_mapel', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="kelompok">Kelompok</label>
                                            <div class="col-md-10">
                                                <select name="kelompok" id="kelompok" class="form-control">
                                                    <?php if ($mapel['kelompok_mapel'] == "Kelompok A Umum") : ?>
                                                        <option value="Kelompok A Umum" selected>Kelompok A Umum</option>
                                                        <option value="Kelompok B Umum">Kelompok B Umum</option>
                                                        <option value="Kelompok C Peminatan dan Lintas Minat">Kelompok C Peminatan dan Lintas Minat</option>
                                                        <option value="Lintas Minat">Lintas Minat</option>
                                                    <?php elseif ($mapel['kelompok_mapel'] == "Kelompok B Umum") : ?>
                                                        <option value="Kelompok B Umum" selected>Kelompok B Umum</option>
                                                        <option value="Kelompok A Umum">Kelompok A Umum</option>
                                                        <option value="Kelompok C Peminatan dan Lintas Minat">Kelompok C Peminatan dan Lintas Minat</option>
                                                        <option value="Lintas Minat">Lintas Minat</option>
                                                    <?php elseif ($mapel['kelompok_mapel'] == "Kelompok C Peminatan dan Lintas Minat") : ?>
                                                        <option value="Kelompok C Peminatan dan Lintas Minat" selected>Kelompok C Peminatan dan Lintas Minat</option>
                                                        <option value="Kelompok A Umum">Kelompok A Umum</option>
                                                        <option value="Kelompok B Umum">Kelompok B Umum</option>
                                                        <option value="Lintas Minat">Lintas Minat</option>
                                                    <?php elseif ($mapel['kelompok_mapel'] == "Lintas Minat") : ?>
                                                        <option value="Lintas Minat" selected>Lintas Minat</option>
                                                        <option value="Kelompok A Umum">Kelompok A Umum</option>
                                                        <option value="Kelompok B Umum">Kelompok B Umum</option>
                                                        <option value="Kelompok C Peminatan dan Lintas Minat">Kelompok C Peminatan dan Lintas Minat</option>
                                                    <?php else : ?>
                                                        <option value="Kelompok A Umum">Kelompok A Umum</option>
                                                        <option value="Kelompok B Umum">Kelompok B Umum</option>
                                                        <option value="Kelompok C Peminatan dan Lintas Minat">Kelompok C Peminatan dan Lintas Minat</option>
                                                        <option value="Lintas Minat">Lintas Minat</option>
                                                    <?php endif ?>
                                                </select>
                                                <?= form_error('kelompok', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="pt-1 d-flex justify-content-end">
                                            <a href="<?= base_url('admin/mapel') ?>" class="btn btn-secondary mr-1">Batal</a>
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