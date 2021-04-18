<!-- home start -->
<section class="bg-home bg-gradient" id="home">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-sm-12">
                        <div class="home-title text-white text-center">
                            <?php

                            use PhpOffice\PhpSpreadsheet\Shared\Date;

                            if ($sekolah[0]['logo_sekolah'] == null) : ?>
                                <p>Logo Sekolah Belum di Setting</p>
                            <?php else : ?>
                                <img src="<?= base_url('assets/images/sekolah/' . $sekolah[0]['logo_sekolah']) ?>" height="150px">
                            <?php endif ?>
                            <h5 class="mb-2 text-white-50">Welcome To</h5>
                            <h2 class="mb-2">SILUSI</h2>
                            <p class="text-white-50 home-desc font-16">Sistem Informasi Kelulusan Siswa</p>
                            <?php if ($sekolah[0]['nama_sekolah'] == null) : ?>
                                <p class="text-white home-desc font-16">Nama Sekolah Belum Disetting!</p>
                            <?php else : ?>
                                <p class="text-white home-desc font-16"><?= $sekolah[0]['nama_sekolah'] ?></p>
                            <?php endif ?>
                            <!-- <p class="text-white-50 home-desc font-16 mb-5">Sistem Informasi Kelulusan Siswa</p> -->

                            <?php
                            date_default_timezone_set('Asia/Jakarta');
                            $current_time = Date('Y-m-d H:i:s');
                            // $current_time = new DateTime();
                            $current_date = new DateTime('NOW');
                            // var_dump($current_time);
                            // var_dump($jadwal[0]['tanggal_awal'] . " " . $jadwal[0]['jam_awal']);
                            // die;
                            ?>
                            <?php if ($jadwal == null) : ?>
                                <div class="alert alert-danger mt-2" role="alert">
                                    Jadwal Belum Di Setting!
                                </div>
                            <?php elseif ($jadwal != null) : ?>
                                <?php if ($current_time >= $jadwal[0]['tanggal_awal'] . " " . $jadwal[0]['jam_awal'] && $current_time <= $jadwal[0]['tanggal_akhir'] . " " . $jadwal[0]['jam_akhir']) : ?>
                                    <!-- INI ADALAH FORMNYA -->
                                    <form class="app-search" action="<?= base_url('home') ?>" method="POST">
                                        <div class="app-search-box">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="keyword" placeholder="Cari berdasarkan Nomor Induk Siswa">
                                                <div class="input-group-append">
                                                    <input class="btn btn-primary" type="submit" name="submit">
                                                    <i class="fe-search"></i>
                                                    </input>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- PENGECEKAN KALAU INPUT KOSONG -->
                                    <?php
                                    // var_dump($nis['nis_siswa']);
                                    // die;
                                    ?>
                                    <?php if ($nis == null) : ?>
                                        <div class="alert alert-danger mt-2" role="alert">
                                            Keyword Kosong
                                        </div>
                                    <?php elseif ($nis != null) : ?>
                                        <?php if ($nis['status'] == "Lulus") : ?>
                                            <div class="alert alert-success mt-2" role="alert">
                                                <div class="container-fluid">
                                                    <div class="row ">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <div class="col-2 ">
                                                                <img src="<?= base_url('assets/images/profile/admin.png') ?>" height="150px">
                                                            </div>
                                                            <div class="col-10">
                                                                <div class="form-group row">
                                                                    <label class="col-md-2 col-form-label" for="nis">NIS Siswa</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" readonly name="nis_siswa" id="nis_siswa" class="form-control" value="<?= $nis['nis_siswa'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-2 col-form-label" for="noujian">Nomor Ujian Siswa</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" readonly name="nomor_ujian_siswa" id="nomor_ujian_siswa" class="form-control" value="<?= $nis['nomor_ujian_siswa'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-2 col-form-label" for="nama">Nama Siswa</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" readonly name="nama_siswa" id="nama_siswa" class="form-control" value="<?= $nis['nama_siswa'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-2 col-form-label" for="nama">Nilai Siswa</label>
                                                                    <table class="table table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Ujian Sekolah</th>
                                                                                <th scope="col">USP-BKS</th>
                                                                                <th scope="col">Rata - Rata</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><?= $nis['ujian_sekolah'] ?></td>
                                                                                <td><?= $nis['usp_bks'] ?></td>
                                                                                <td><strong><?= $nis['avg'] ?></strong></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-2 col-form-label" for="status">Status</label>
                                                                    <div class="col-md-10">
                                                                        <h4>Selamat Kamu telah dinyatakan <?= $nis['status'] ?> !</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php elseif ($nis['status'] == "Tidak Lulus") : ?>
                                            <div class="alert alert-danger mt-2" role="alert">
                                                <div class="container-fluid">
                                                    <div class="row ">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <div class="col-2 ">
                                                                <img src="<?= base_url('assets/images/profile/admin.png') ?>" height="150px">
                                                            </div>
                                                            <div class="col-10">
                                                                <div class="form-group row">
                                                                    <label class="col-md-2 col-form-label" for="nis">NIS Siswa</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" readonly name="nis_siswa" id="nis_siswa" class="form-control" value="<?= $nis['nis_siswa'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-2 col-form-label" for="noujian">Nomor Ujian Siswa</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" readonly name="nomor_ujian_siswa" id="nomor_ujian_siswa" class="form-control" value="<?= $nis['nomor_ujian_siswa'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-2 col-form-label" for="nama">Nama Siswa</label>
                                                                    <div class="col-md-10">
                                                                        <input type="text" readonly name="nama_siswa" id="nama_siswa" class="form-control" value="<?= $nis['nama_siswa'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-2 col-form-label" for="nama">Nilai Siswa</label>
                                                                    <table class="table table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Ujian Sekolah</th>
                                                                                <th scope="col">USP-BKS</th>
                                                                                <th scope="col">Rata - Rata</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><?= $nis['ujian_sekolah'] ?></td>
                                                                                <td><?= $nis['usp_bks'] ?></td>
                                                                                <td><strong><?= $nis['avg'] ?></strong></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-2 col-form-label" for="status">Status</label>
                                                                    <div class="col-md-10">
                                                                        <h4>Mohon Maaf saat ini Nilai Kamu belum mencukupi kriteria, kamu dinyatakan <strong><?= $nis['status'] ?> !.</strong>Tetap semangat jangan menyerah!</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif ?>
                                    <?php endif ?>
                                <?php else : ?>
                                    <div class="alert alert-primary mt-2" role="alert">
                                        Terimakasih telah berpartisipasi. Pengumuman saat ini sudah ditutup!
                                    </div>
                                <?php endif ?>
                            <?php endif ?>



                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div>
            <!-- end container-fluid -->
        </div>
    </div>
</section>
<!-- home end -->