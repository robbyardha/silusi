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
                                <?php if ($this->session->flashdata('mapel')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>Data <strong>Mata Pelajaran </strong>Berhasil <?= $this->session->flashdata('mapel') ?>
                                    </div>
                                <?php endif ?>
                                <div class="p-2">
                                    <div class="d-flex justify-content-end mb-3">
                                        <a href="<?= base_url('admin/mapel/import') ?>" class="btn btn-info waves-effect waves-light mr-1"><i class="fas fa-file-excel mr-1"></i> <span>Import</span> </a>
                                        <a href="<?= base_url('admin/mapel/tambah') ?>" class="btn btn-primary">Tambah</a>
                                    </div>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <?php $no = 1; ?>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Mapel</th>
                                                <th>Kelompok Mapel</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($mapel as $m) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $m['nama_mapel'] ?></td>
                                                    <td><?= $m['kelompok_mapel'] ?></td>
                                                    <td>
                                                        <a href="<?= base_url('admin/mapel/ubah/') ?><?= $m['id'] ?> " class="btn btn-success">Ubah</a>
                                                        <a href="<?= base_url('admin/mapel/hapus/') ?><?= $m['id'] ?>" class="btn btn-danger">Hapus</a>
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