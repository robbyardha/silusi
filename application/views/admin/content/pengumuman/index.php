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
                                <?php if ($this->session->flashdata('pengumuman')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>Data <strong>Pengumuman </strong>Berhasil <?= $this->session->flashdata('pengumuman') ?>
                                    </div>
                                <?php endif ?>
                                <div class="p-2">
                                    <div class="d-flex justify-content-end mb-3">
                                        <a href="<?= base_url('admin/pengumuman/tambah') ?>" class="btn btn-primary"><i class="fas fa-plus mr-1"></i> <span>Tambah</span></a>
                                    </div>

                                    <?php foreach ($pengumuman as $p) : ?>
                                        <?php
                                        date_default_timezone_set('Asia/Jakarta');
                                        $currentdatetime = $p['created_date'];
                                        $newdate = date('D, d F Y H:i:s', strtotime($currentdatetime));
                                        ?>
                                        <div class="card text-white bg-purple text-center">
                                            <blockquote class="card-bodyquote mb-0 mb-3">
                                                <h4 style="color: white;"><?= $p['judul'] ?></h4>
                                                <p>
                                                    <?php if (strlen($p['pengumuman']) > 55) : ?>
                                                        <?= substr($p['pengumuman'] . "......", 0, 55) ?>
                                                    <?php else : ?>
                                                        <?= substr($p['pengumuman'], 0, 55) ?>
                                                    <?php endif ?>
                                                </p>
                                                <footer class="blockquote-footer text-white">
                                                    created by: <?= $p['created_by'] ?> | <cite title="Source Title"><?= $newdate ?></cite>
                                                </footer>
                                            </blockquote>
                                            <div class="d-flex justify-content-center mb-3">
                                                <a href="<?= base_url('admin/pengumuman/detail/') . $p['id'] ?>" class="btn btn-rounded btn-info waves-effect waves-light mr-1"><i class="fas fa-newspaper mr-1"></i> <span>Detail</span> </a>
                                                <a href="<?= base_url('admin/pengumuman/ubah/') . $p['id'] ?>" class="btn btn-rounded btn-warning mr-1"><i class="fas fa-pen mr-1"></i> <span>Ubah</span></a>
                                                <!-- <a href="#" data-toggle="modal" data-target="#deleteModalPengumuman" data-id="<?= $p['id'] ?>" class="btn btn-rounded btn-danger mr-1" date><i class="fas fa-trash mr-1"></i> <span>Hapus</span></a> -->
                                                <a href="<?= base_url('admin/pengumuman/hapus/') . $p['id'] ?>" class="btn btn-rounded btn-danger mr-1" date><i class="fas fa-trash mr-1"></i> <span>Hapus</span></a>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <!-- modal -->
                        <form action="<?= base_url('admin/pengumuman/hapus') ?>" method="POST">
                            <div class="modal fade" id="deleteModalPengumuman" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deleteModalPengumumanLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalPengumumanLabel">Hapus Data Pengumuman</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda Yakin akan menghapus data pengumuman dengan judul <strong><?= $pengumuman[0]['judul'] ?></strong>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden" name="id" id="id" value="<?= $pengumuman[0]['id'] ?>">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" type="submit" class="btn btn-danger">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- EnD modal delete -->
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