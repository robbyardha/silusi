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

                            if ($sekolah == null) : ?>
                                <p>Logo Sekolah Belum di Setting</p>
                            <?php else : ?>
                                <img src="<?= base_url('assets/images/sekolah/' . $sekolah[0]['logo_sekolah']) ?>" height="150px">
                            <?php endif ?>
                            <h5 class="mb-2 text-white-50">Welcome To</h5>
                            <h2 class="mb-2">SILUSI</h2>
                            <p class="text-white-50 home-desc font-16">Sistem Informasi Kelulusan Siswa</p>
                            <?php if ($sekolah == null) : ?>
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

                                    <?php if ($nilai ==  null) : ?>
                                        <div class="alert alert-danger mt-2" role="alert">
                                            Data Nilai Belum diperbaharui
                                        </div>
                                    <?php else : ?>
                                        <!-- INI ADALAH FORMNYA -->
                                        <form class="app-search" action="<?= base_url('home') ?>" method="POST">
                                            <div class="app-search-box">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="keyword" placeholder="Cari berdasarkan Nomor Induk Siswa">
                                                    <div class="input-group-append">
                                                        <input class="btn btn-primary" type="submit" name="submit">
                                                        <!-- <i class="fe-search"></i> -->
                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php if ($nis == null) : ?>
                                            <div class="alert alert-danger mt-2" role="alert">
                                                Keyword Kosong / NIS tidak ditemukan
                                            </div>
                                        <?php elseif ($nis != null) : ?>
                                            <?php if ($nis['status_lulus'] == "Lulus") : ?>
                                                <div class="alert alert-success mt-2" role="alert">
                                                    <div class="container-fluid">
                                                        <div class="row ">
                                                            <div class="col-12 d-flex justify-content-center mt-5">
                                                                <div class="col-3 mr-4 pr-5">
                                                                    <img src="<?= base_url('assets/images/profile/admin.png') ?>" height="150px">
                                                                </div>
                                                                <div class="col-11">
                                                                    <h2>Selamat Kamu Dinyatakan <?= $nis['status_lulus'] ?>!
                                                                        <h4>Berikut Adalah Detail Informasi Kamu</h4>
                                                                    </h2>
                                                                    <br>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 text-left col-form-label" for="nis">NIS Siswa :</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" readonly name="nis_siswa" id="nis_siswa" class="form-control" value="<?= $nis['nis'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 text-left col-form-label" for="noujian">NISN :</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" readonly name="nomor_ujian_siswa" id="nomor_ujian_siswa" class="form-control" value="<?= $nis['nomor_ujian'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 text-left col-form-label" for="nama">Nama Siswa :</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" readonly name="nama_siswa" id="nama_siswa" class="form-control" value="<?= $nis['nama'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 text-left col-form-label" for="nama">Tempat, Tangal Lahir :</label>
                                                                        <div class="col-md-8">
                                                                            <?php
                                                                            $current = $nis['tgl_lahir'];
                                                                            $newdate = date('d F Y', strtotime($current));
                                                                            ?>
                                                                            <input type="text" readonly name="ttl" id="ttl" class="form-control" value="<?= $nis['tempat_lahir'] ?>, <?= $newdate ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 text-left col-form-label" for="nama">Nilai Siswa :</label>
                                                                        <table class="table table-striped">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th scope="col">No</th>
                                                                                    <th scope="col">Mata Pelajaran</th>
                                                                                    <th scope="col">Nilai Rapor</th>
                                                                                    <th scope="col">NUSP (Nilai Ujian Satuan Pendidikan)</th>
                                                                                    <th scope="col">NSP (Nilai Satuan Pendidikan)</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                $no = 1;
                                                                                ?>
                                                                                <?php foreach ($nilai_mapel as $np) : ?>
                                                                                    <tr>
                                                                                        <td><?= $no++ ?></td>
                                                                                        <td><?= $np['nama_mapel'] ?></td>
                                                                                        <td><?= $np['nilai_rapot'] ?></td>
                                                                                        <td><?= $np['nusp'] ?></td>
                                                                                        <td><?= $np['nsp'] ?></td>
                                                                                    </tr>

                                                                            </tbody>
                                                                        <?php endforeach ?>
                                                                        <?php
                                                                        // var_dump($nilai_mapel);
                                                                        // die;
                                                                        ?>
                                                                        <tbody>
                                                                            <td colspan="4"><strong>Rata Rata</strong></td>
                                                                            <td colspan="1"><Strong>
                                                                                    <?php
                                                                                    // var_dump($nilai_mapel[0]['kelas']);
                                                                                    // die;
                                                                                    //Menjumlah semua nilai dan dibagi (average)
                                                                                    // $sum_avg = $nilai_mapel[0]['nsp'] + $nilai_mapel[1]['nsp'] + $nilai_mapel[2]['nsp'] + $nilai_mapel[3]['nsp'] + $nilai_mapel[4]['nsp'] + $nilai_mapel[5]['nsp'] + $nilai_mapel[6]['nsp'] + $nilai_mapel[7]['nsp'] + $nilai_mapel[8]['nsp'] + $nilai_mapel[9]['nsp'] + $nilai_mapel[10]['nsp'] + $nilai_mapel[11]['nsp'] + $nilai_mapel[12]['nsp'] + $nilai_mapel[13]['nsp'] + $nilai_mapel[14]['nsp'] + $nilai_mapel[15]['nsp'] + $nilai_mapel[16]['nsp'] + $nilai_mapel[17]['nsp'] + $nilai_mapel[18]['nsp'];
                                                                                    //echo ($sum_nsp);
                                                                                    // $count_mapel = count($nilai_mapel);
                                                                                    // $result = $sum_avg / $count_mapel;
                                                                                    if ($nilai_mapel[0]['kelas'] == "IPA") {
                                                                                        $sum_avg_ipa = $nilai_mapel[0]['nsp'] + $nilai_mapel[1]['nsp'] + $nilai_mapel[2]['nsp'] + $nilai_mapel[3]['nsp'] + $nilai_mapel[4]['nsp'] + $nilai_mapel[5]['nsp'] + $nilai_mapel[6]['nsp'] + $nilai_mapel[7]['nsp'] + $nilai_mapel[8]['nsp'] + $nilai_mapel[9]['nsp'] + $nilai_mapel[10]['nsp'] + $nilai_mapel[11]['nsp'] + $nilai_mapel[12]['nsp'] + $nilai_mapel[13]['nsp'] +  $nilai_mapel[18]['nsp'];
                                                                                        $count_mapel_ipa = 15;
                                                                                        $result = $sum_avg_ipa / $count_mapel_ipa;
                                                                                    } elseif ($nilai_mapel[0]['kelas'] == "IPS") {
                                                                                        $sum_avg_ips = $nilai_mapel[0]['nsp'] + $nilai_mapel[1]['nsp'] + $nilai_mapel[2]['nsp'] + $nilai_mapel[3]['nsp'] + $nilai_mapel[4]['nsp'] + $nilai_mapel[5]['nsp'] + $nilai_mapel[6]['nsp'] + $nilai_mapel[7]['nsp'] + $nilai_mapel[8]['nsp'] + $nilai_mapel[9]['nsp'] + $nilai_mapel[14]['nsp'] + $nilai_mapel[15]['nsp'] + $nilai_mapel[16]['nsp'] + $nilai_mapel[17]['nsp'] + $nilai_mapel[18]['nsp'];
                                                                                        $count_mapel_ips = 15;
                                                                                        $result = $sum_avg_ips / $count_mapel_ips;
                                                                                    }
                                                                                    // echo (ceil($result, 3));
                                                                                    // echo (floor($result, 3));
                                                                                    // echo (round($result, 3));
                                                                                    echo (number_format($result, 2));
                                                                                    ?>

                                                                                </Strong></td>
                                                                        </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-2 col-form-label" for="status">Status</label>
                                                                        <div class="col-md-10">
                                                                            <h4>Selamat Kamu telah dinyatakan <?= $nis['status_lulus'] ?> !</h4>
                                                                        </div>
                                                                    </div>
                                                                    <?php if ($nis['status_pembayaran'] == "Lunas") : ?>
                                                                        <a href="<?= base_url('Home/cetak_skl/') . $nis['nis'] ?>" class="btn btn-success">Cetak SKL</a>
                                                                    <?php else : ?>
                                                                        <div class="alert alert-danger" role="alert">
                                                                            Maaf Kamu tidak bisa mencetak SKL karena Status Pembayaranmu saat ini masih belum Lunas, silahkan lunasi pada Devisi Keuangan!
                                                                        </div>
                                                                    <?php endif ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php elseif ($nis['status_lulus'] == "Tidak Lulus") : ?>
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
                                        <!-- PENGECEKAN KALAU INPUT KOSONG -->
                                        <?php
                                        // var_dump($nis['nis_siswa']);
                                        // die;
                                        ?>

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