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
                                <?php if ($this->session->flashdata('nilai_siswa')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>Data <strong>Nilai Siswa </strong>Berhasil <?= $this->session->flashdata('nilai_siswa') ?>
                                    </div>
                                <?php endif ?>
                                <div class="p-2">
                                    <div class="d-flex justify-content-end mb-3">
                                        <a href="<?= base_url('admin/nilai_ujian/import') ?>" class="btn btn-info waves-effect waves-light mr-1"><i class="fas fa-file-excel mr-1"></i> <span>Import</span> </a>
                                        <a href="<?= base_url('admin/nilai_ujian/tambah') ?>" class="btn btn-primary">Tambah</a>
                                    </div>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="width: 100%;">
                                        <?php $no = 1; ?>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Nilai Rapot</th>
                                                <th>Nilai NUSP</th>
                                                <th>Nilai NSP</th>
                                                <th>Rata-Rata Per Mapel</th>
                                                <th>Status Kelulusan</th>
                                                <th>Status Pembayaran</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($nilai_siswa as $ns) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $ns['nis'] ?></td>
                                                    <td><?= $ns['nama'] ?></td>
                                                    <td><?= $ns['nama_mapel'] ?></td>
                                                    <td>
                                                        <?php if ($ns['nilai_rapot'] == null) : ?>
                                                            <p>Data masih kosong</p>
                                                        <?php elseif ($ns['nilai_rapot'] != null) : ?>
                                                            <?= $ns['nilai_rapot'] ?>
                                                        <?php endif ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($ns['nusp'] == null) : ?>
                                                            <p>Data masih kosong</p>
                                                        <?php elseif ($ns['nusp'] != null) : ?>
                                                            <?= $ns['nusp'] ?>
                                                        <?php endif ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($ns['nsp'] == null) : ?>
                                                            <p>Data masih kosong</p>
                                                        <?php elseif ($ns['nsp'] != null) : ?>
                                                            <?= $ns['nsp'] ?>
                                                        <?php endif ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($ns['avg'] == null) : ?>
                                                            <p>Data masih kosong</p>
                                                        <?php elseif ($ns['avg'] != null) : ?>
                                                            <?= $ns['avg'] ?>
                                                        <?php endif ?>
                                                    </td>
                                                    <td><?= $ns['status_lulus'] ?></td>
                                                    <td><?= $ns['status_pembayaran'] ?></td>
                                                    <td>
                                                        <a class="btn btn-success" href="<?= base_url('admin/nilai_ujian/ubah/') . $ns['id'] ?>">Ubah</a> | <a class="btn btn-danger" href="<?= base_url('admin/nilai_ujian/hapus/') . $ns['id'] ?>">Hapus</a>>Hapus</a>
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