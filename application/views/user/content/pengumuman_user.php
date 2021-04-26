<!-- home start -->
<section class="bg-home bg-gradient" id="home">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container-fluid">
                <div class="row align-item-center">
                    <div class="col-lg-12 col-sm-12">
                        <div class="home-title text-white text-center">
                            <h2 class="mb-2">PENGUMUMAN</h2>
                        </div>
                        <?php if ($pengumuman == null) : ?>
                            <div class="col-xl-12 col-sm-6 text-center">
                                <div class="alert alert-danger" role="alert">
                                    Belum Ada Pengumuman
                                </div>
                            </div>
                        <?php elseif ($pengumuman != null) : ?>
                            <?php foreach ($pengumuman as $p) : ?>
                                <div class="col-xl-12 col-sm-6 text-center">
                                    <div class="services-box p-4 bg-white mt-4">
                                        <div class="services-img float-left mr-4">
                                            <img src="images/icons/layers.png" alt="">
                                        </div>
                                        <h5><?= $p['judul'] ?></h5>
                                        <div class="overflow-hidden">
                                            <p class="text-muted"><?= substr($p['pengumuman'], 0, 75) ?>....</p>
                                            <small>created by: <?= $p['created_by'] ?></small>
                                            <br>
                                            <small>Date Created: <?= $p['created_date'] ?></small>
                                            <br>
                                            <a href="<?= base_url('Pengumumanuser/detail/') . $p['id'] ?>" class="text-custom">Read more...</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif ?>
                    </div>
                </div>

            </div>
            <!-- end container-fluid -->
        </div>
    </div>
</section>
<!-- home end -->