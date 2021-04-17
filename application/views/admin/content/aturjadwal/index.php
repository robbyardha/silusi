<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title"><?= $headertitle ?></h4>
                        <!-- <p class="sub-header">
                            Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                        </p> -->
                        <div class="row">
                            <div class="col-12">
                                <?php if ($this->session->flashdata('jadwalpengumuman')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>Data <strong>Jadwal Pengumuman </strong>Berhasil <?= $this->session->flashdata('jadwalpengumuman') ?>
                                    </div>
                                <?php endif ?>
                                <div class="p-2">
                                    <div class="d-flex justify-content-end mb-3">
                                        <a href="<?= base_url('admin/jadwal_pengumuman/import') ?>" class="btn btn-info waves-effect waves-light mr-1"><i class="fas fa-file-excel mr-1"></i> <span>Import</span> </a>
                                        <a href="<?= base_url('admin/jadwal_pengumuman/tambah') ?>" class="btn btn-primary">Tambah</a>
                                    </div>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <?php $no = 1; ?>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Jadwal</th>
                                                <th>Set Awal</th>
                                                <th>Set Akhir</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            date_default_timezone_set('Asia/Jakarta');
                                            ?>
                                            <?php foreach ($jadwal as $j) : ?>
                                                <?php
                                                $current_date_awal = $j['tanggal_awal'];
                                                $current_time_awal = $j['jam_awal'];
                                                $current_date_akhir = $j['tanggal_akhir'];
                                                $current_time_akhir = $j['jam_akhir'];

                                                $new_date_awal = date('D, d F Y', strtotime($current_date_awal));
                                                $new_time_awal = date('H:i:s', strtotime($current_time_awal));
                                                $new_date_akhir = date('D, d F Y', strtotime($current_date_akhir));
                                                $new_time_akhir = date('H:i:s', strtotime($current_time_akhir));

                                                ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $j['nama_jadwal'] ?></td>
                                                    <td>
                                                        <p class="badge badge-success badge-pill">Tanggal : <?= $new_date_awal ?></p>
                                                        <br>
                                                        <p class="badge badge-success badge-pill">Waktu : <?= $new_time_awal ?></p>
                                                    </td>
                                                    <td>
                                                        <p class="badge badge-danger badge-pill">Tanggal : <?= $new_date_akhir ?></p>
                                                        <br>
                                                        <p class="badge badge-danger badge-pill">Waktu : <?= $new_time_akhir ?></p>
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url('admin/jadwal_pengumuman/ubah/') ?><?= $j['id'] ?> " class="btn btn-success">Ubah</a>
                                                        <a href="<?= base_url('admin/jadwal_pengumuman/hapus/') ?><?= $j['id'] ?>" class="btn btn-danger">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
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