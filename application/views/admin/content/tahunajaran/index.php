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
                                <?php if ($this->session->flashdata('tahunajaran')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>Data <strong>Tahun Ajaran </strong>Berhasil <?= $this->session->flashdata('tahunajaran') ?>
                                    </div>
                                <?php elseif ($this->session->flashdata('tahunajarankonfirm')) : ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button><strong>Tahun Ajaran <?= $this->session->flashdata('tahunajarankonfirm') ?> </strong>
                                    </div>
                                <?php endif ?>
                                <div class="p-2">
                                    <div class="d-flex justify-content-end mb-3">
                                        <!-- <a href="<?= base_url('admin/tahunajaran/import') ?>" class="btn btn-info waves-effect waves-light mr-1"><i class="fas fa-file-excel mr-1"></i> <span>Import</span> </a> -->
                                        <a href="<?= base_url('admin/tahunajaran/tambah') ?>" class="btn btn-primary">Tambah</a>
                                    </div>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <?php $no = 1; ?>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tahun Ajaran</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($tahunajaran as $th) : ?>
                                                <tr>
                                                    <?php
                                                    date_default_timezone_set('Asia/Jakarta');
                                                    // $current_date = $s['tgl_lahir'];
                                                    // $newdate = date('d F Y', strtotime($current_date));
                                                    ?>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $th['tahun_ajaran'] ?></td>
                                                    <td>
                                                        <?php if ($th['is_active'] == 0) : ?>
                                                            <a href="<?= base_url('admin/tahunajaran/aktifkan/') ?><?= $th['id'] ?> " class="btn btn-info">Aktifkan</a>
                                                        <?php elseif ($th['is_active'] == 1) : ?>
                                                            <strong class="badge badge-pills badge-primary">Sedang Aktif</strong>
                                                        <?php endif ?>
                                                        <a href="<?= base_url('admin/tahunajaran/ubah/') ?><?= $th['id'] ?> " class="btn btn-success">Ubah</a>
                                                        <a href="<?= base_url('admin/tahunajaran/hapus/') ?><?= $th['id'] ?>" class="btn btn-danger">Hapus</a>
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