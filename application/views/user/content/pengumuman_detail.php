<!-- home start -->
<section class="bg-home bg-gradient" id="home">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container-fluid">
                <div class="row align-item-center">
                    <div class="col-lg-12 col-sm-12">
                        <div class="home-title text-white text-center">
                            <h2 class="mb-2">PENGUMUMAN <br> <?= $pengumuman['judul'] ?></h2>
                        </div>
                        <div class="col-xl-12 col-sm-6 text-center">
                            <div class="services-box p-4 bg-white mt-4">
                                <div class="services-img float-left mr-4">
                                    <img src="images/icons/layers.png" alt="">
                                </div>
                                <h5><?= $pengumuman['judul'] ?></h5>
                                <div class="overflow-hidden">
                                    <p class="text-muted"><?= $pengumuman['pengumuman'] ?></p>
                                    <small>created by: <?= $pengumuman['created_by'] ?></small>
                                    <br>
                                    <small>Date Created: <?= $pengumuman['created_date'] ?></small>
                                    <br>
                                    <a href="<?= base_url('Pengumumanuser') ?>" class="btn btn-danger mt-3">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end container-fluid -->
        </div>
    </div>
</section>
<!-- home end -->