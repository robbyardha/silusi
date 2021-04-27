<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title">Hapus Data Nilai Ujian</h4>
                        <!-- <p class="sub-header">
                            Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                        </p> -->
                        <div class="row">
                            <div class="col-12">
                                <?= $this->session->flashdata('message') ?>
                                <div class="p-2">
                                    <form action="" method="POST">
                                        <div class="form-group row">

                                            <div class="row">
                                                <div class="col-12">
                                                    <h2 class="text-center">Apakah yakin menghapus data <strong class="badge badge-pills badge-danger"><?= $nilai_siswa['nama'] ?></strong> dengan mata pelajaran <strong class="badge badge-pills badge-danger"><?= $nilai_siswa['nama_mapel'] ?></strong> ? </h2>
                                                    <table class="table">
                                                        <thead>
                                                            <th>Nilai Rapot</th>
                                                            <th>NUSP</th>
                                                            <th>NSP</th>
                                                            <th>AVG</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?= $nilai_siswa['nilai_rapot'] ?></td>
                                                                <td><?= $nilai_siswa['nusp'] ?></td>
                                                                <td><?= $nilai_siswa['nsp'] ?></td>
                                                                <td><?= $nilai_siswa['avg'] ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="p-2">
                                                        <form action="" method="POST">
                                                            <input type="hidden" name="id" id="id" value="<?= $nilai_siswa['id'] ?>">
                                                            <div class="pt-1 d-flex justify-content-end">
                                                                <a href="<?= base_url('admin/nilai_ujian') ?>" class="btn btn-secondary mr-1">Batal</a>
                                                                <button type="submit" class="btn btn-danger btn-raised ml-1">Hapus</a>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                                <!-- end row -->

                                            </div> <!-- end card-box -->
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