<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Cetak SKL - <?= $nilai_mapel[0]['nis'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sistem Informasi Kelulusan | SILUSI | ARDHACODES.COM" name="description" />
    <meta content="ARDHACODES" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('application/views/user/content') ?>/cetak_skl.css" />

</head>


<body>
    <style>
        .cetak-skl {
            width: 850px;
            padding: 7px;
        }

        .col-cetak-skl {
            width: 735px;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            font-size: 14pt;
            text-align: center;
        }

        .col-lampiran {
            width: 735px;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            font-size: 14pt;
            text-align: center;
        }

        .head-hr {
            width: 10cm;
            align-items: center;
        }

        .pernyataan {
            width: 700px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            text-align: left;
            margin-left: 20px
        }

        .pernyataan2 {
            width: 645px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            text-align: left;
            margin-left: 20px;
            text-align: justify;
            padding-right: 1cm;
        }

        .berlaku {
            width: 700px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            text-align: justify;
            margin-left: 20px;
            margin-top: 3cm;
            margin-right: 20px;
        }

        .item-pernyataan {
            width: 700px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            text-align: left;
            margin-left: 10px;

        }

        .menerangkan {
            width: 850px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            text-align: left;
            margin-left: 20px;
        }

        .table-data-diri {
            width: 850px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            text-align: left;
            margin-left: 40px;
        }

        .sbgbrkt {
            width: 700;
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            text-align: left;
        }

        .foto {
            height: 4cm;
            width: 3cm;
            border-style: solid;
            background-color: #FFFFFF;
            float: right;
            margin-top: 1cm;
        }


        .ttdbox {
            width: 500px;
            float: right;
            margin-top: 1cm;
        }

        * {
            box-sizing: border-box;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            width: 50%;
            height: 100px;
            padding-right: 1px;
            /* padding: 10px; */
            /* height: 300px; */
            /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .margintop {
            margin-top: 1cm;
        }

        #watermark {
            position: fixed;

            bottom: -3px;
            left: -50px;

            width: 21cm;
            background-position: center;
            /* width: 21.59cm; */
            height: 29, 7cm;

            z-index: -1500;
            /* opacity: 0.5; */
            /* margin-right: 10cm; */
        }

        .bg-watermark {
            /* position: absolute; */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            margin-top: 1rem;
            margin-right: 1rem;
            padding-bottom: 1rem;

        }

        .kel-center {
            text-align: left;
        }

        .lulus {
            font-weight: bold;
            text-align: center;
            margin-right: 6cm;
        }

        .table-nilai {
            margin-left: 1, 75cm;
        }
    </style>
    <script>
        $(document).ready(function() {
            window.setInterval(function() {
                var sisawaktu = $("#waktu").html();
                sisawaktu = eval(sisawaktu);
                if (sisawaktu == 0) {
                    location.href = "<?= base_url('Home') ?>";
                } else {
                    $("#waktu").html(sisawaktu - 1);
                }
            }, 2000);
        });
    </script>
    <div id="watermark">
        <img class="bg-watermark" src="<?= "assets/images/kopa4.jpg" ?>" height="100%" width="100%" />
    </div>

    <div class="margintop">
        <br>
        <br>
        <br>
    </div>
    <div class="cetak-skl">
        <div class="col-cetak-skl">
            <?php
            $nomor_surat = "151/KET/IV.4/SMAM.1/F/2022";
            $kriterialulus = "071/KEP/IV.4/SMAM.1/F/2022";
            $tgl_lulus = "05 Mei 2022";
            $tgl_surat = "18 Februari 2022";
            $tmp_lulus = "Taman";
            ?>
            SURAT KETERANGAN LULUS
            <hr class="head-hr">
            Nomor : <?= $nomor_surat ?>
        </div>
        <?php
        $tgl = $nilai_mapel[0]['tgl_lahir'];
        $new_date = date("d F Y", strtotime($tgl));
        ?>

        <br>
        <div class="pernyataan">
            Yang bertanda tangan di bawah ini, Kepala Sekolah Menengah Atas SMA Muhammadiyah 1 Taman Kabupaten Sidoarjo dengan Nomor Pokok Sekolah Nasional : 20501861 menerangkan bahwa:
        </div>

        <br>

        <div class="table-data-diri">
            <table>
                <tr>
                    <td>Nama </td>
                    <td>:</td>
                    <td><?= $nilai_mapel[0]['nama'] ?><br></td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir </td>
                    <td>:</td>
                    <td><?= $nilai_mapel[0]['tempat_lahir'] ?>, <?= $nilai_mapel[0]['tanggal'] ?> <?= $nilai_mapel[0]['bulan'] ?> <?= $nilai_mapel[0]['tahun'] ?><br></td>
                    <!-- 
                        menggunakan tanggal lama 
                        format bahasa inggris
                        
                        <td><? //= $nilai_mapel[0]['tempat_lahir'] 
                            ?>, <? //= $new_date 
                                ?><br></td>
                     -->
                </tr>
                <tr>
                    <td>Nama orang tua / wali </td>
                    <td>:</td>
                    <td><?= $nilai_mapel[0]['namaortu'] ?><br></td>
                </tr>
                <tr>
                    <td>NIS </td>
                    <td>:</td>
                    <td><?= $nilai_mapel[0]['nis'] ?><br></td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td><?= $nilai_mapel[0]['nomor_ujian'] ?><br></td>
                </tr>
                <tr>LULUS</tr>
            </table>
            <h2 class="lulus">LULUS</h2>
        </div>

        <div class="pernyataan2">
            dari sekolah menengah atas setelah memenuhi seluruh kriteria kelulusan sesuai dengan Surat Keputusan
            Kepala SMA Muhammadiyah 1 Taman Sidoarjo. Nomor: <?= $kriterialulus ?>. Tanggal <?= $tgl_surat ?> tentang Kriteria Kelulusan. Kelulusan diumumkan pada tanggal 5 Mei 2022, dengan nilai Ujian Sekolah sebagaimana terlampir.
        </div>


        <br>
        <br>
        <div class="row">
            <div class="column" style="margin-right: 1,5 cm;">
                <div class="foto">
                    <p>3X4 <br> Berwarna</p>
                </div>

            </div>
            <div class="column">
                <div>
                    <div class="ttdbox">
                        Taman, 05 Mei 2022
                        <br>
                        Kepala Sekolah
                        <br>
                        <br>
                        <?php
                        // var_dump($_SERVER["DOCUMENT_ROOT"]);
                        // die;
                        ?>
                        <!-- <img src="https://localhost/silusi/assets/images/exattd.png" alt="" srcset=""> -->
                        <!-- <img src="<?php echo $_SERVER["DOCUMENT_ROOT"] . '/silusi/assets/images/exattd.png'; ?>" alt="" srcset=""> -->
                        <!-- <img src="https://localhost/silusi/assets/images/exattd.png" alt="" srcset=""> -->
                        <!-- <img src="<?= "assets/images/ttdpakarif.png" ?>" height="55px" alt="" srcset=""> -->
                        <br>
                        <p>
                            <u><strong>Drs. Zainal Arif Fakhrudi, M.M.</strong></u>
                            <br>
                            NBM.767.792
                        </p>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>


        <div style="page-break-before: always;"></div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-lampiran">
            DAFTAR NILAI
            <br>
            SEKOLAH MENENGAH ATAS
            <br>
            <?php

            if ($nilai_mapel[0]['kelas'] == "IPA") {
                echo "PEMINATAN MATEMATIKA DAN ILMU PENGETAHUAN ALAM";
            } else if ($nilai_mapel[0]['kelas'] == "IPS") {
                echo "PEMINATAN ILMU PENGETAHUAN SOSIAL";
            }
            ?>
            <br>
            TAHUN PELAJARAN 2021/2022
        </div>
        <br>
        <?php
        $no = 1;
        $nob = 1;
        $noc = 1;
        ?>
        <div class="table-data-diri">
            <table>
                <tr>
                    <td>Nama </td>
                    <td>:</td>
                    <td><?= $nilai_mapel[0]['nama'] ?><br></td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir </td>
                    <td>:</td>
                    <td><?= $nilai_mapel[0]['tempat_lahir'] ?>, <?= $nilai_mapel[0]['tanggal'] ?> <?= $nilai_mapel[0]['bulan'] ?> <?= $nilai_mapel[0]['tahun'] ?><br></td>
                    <!-- 
                        menggunakan tanggal lama 
                        format bahasa inggris
                        
                        <td><? //= $nilai_mapel[0]['tempat_lahir'] 
                            ?>, <? //= $new_date 
                                ?><br></td>
                     -->
                </tr>
                <tr>
                    <td>NIS </td>
                    <td>:</td>
                    <td><?= $nilai_mapel[0]['nis'] ?><br></td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td><?= $nilai_mapel[0]['nomor_ujian'] ?><br></td>
                </tr>
            </table>
        </div>
        <br>
        <br>
        <table class="table-nilai" border='1' cellspadding='2' cellspacing='0' width="70%">

            <tr>
                <th><strong>No</strong></th>
                <th><strong>Nama Mata Pelajaran (Kurikulum 2013) </strong></th>
                <th><strong>Nilai Ujian Sekolah</strong></th>
            </tr>
            <tbody>
                <tr>
                    <td colspan="3" class="kel-center"><?= $kelompokaumum[0]['kelompok_mapel'] ?></td>
                </tr>
                <?php foreach ($kelompokaumum as $aumum) : ?>

                    <tr>
                        <td class="kel-center"><?= $no++ ?></td>
                        <td><?= $aumum['nama_mapel'] ?></td>
                        <td class="kel-center"><?= $aumum['nusp'] ?></td>
                    </tr>
                <?php endforeach ?>
                <tr>
                    <td colspan="3" class="kel-center">Kelompok B</td>
                </tr>

                <?php foreach ($kelompokbumum as $bumum) : ?>
                    <tr>
                        <td class="kel-center"><?= $nob++ ?></td>
                        <td><?= $bumum['nama_mapel'] ?></td>
                        <td class="kel-center"><?= $bumum['nusp'] ?></td>
                    </tr>
                <?php endforeach ?>

                <tr>
                    <td colspan="3" class="kel-center">Muatan Lokal</td>
                </tr>
                <?php foreach ($kelompokbumummulok as $bmulok) : ?>
                    <tr>
                        <td class="kel-center"><?= $nob++ ?></td>
                        <td><?= $bmulok['nama_mapel'] ?></td>
                        <td class="kel-center"><?= $bmulok['nusp'] ?></td>
                    </tr>
                <?php endforeach ?>
                <tr>
                    <td colspan="3" class="kel-center">Kelompok C</td>
                </tr>

                <?php foreach ($kelompokcpeminatan as $cminat) : ?>

                    <tr>
                        <td class="kel-center"><?= $noc++ ?></td>
                        <td><?= $cminat['nama_mapel'] ?></td>
                        <td class="kel-center"><?= $cminat['nusp'] ?></td>
                    </tr>
                <?php endforeach ?>

                <!-- SESUAI FORMAT PADA WORD

                MENGHILANGKAN KELOMPOK PEMINATAN
                -->

                <!-- <tr>
                    <td colspan="3" class="kel-center">Kelompok Lintas Minat</td>
                </tr> -->

                <tr>
                    <td colspan="3" class="kel-center">Pilihan Lintas Minat</td>
                </tr>
                <?php foreach ($kelompokcpeminatanlintasminat as $cminatlm) : ?>

                    <tr>
                        <td class="kel-center"><?= $noc++ ?></td>
                        <td><?= $cminatlm['nama_mapel'] ?></td>
                        <td class="kel-center"><?= $cminatlm['nusp'] ?></td>
                    </tr>
                <?php endforeach ?>
                <?php foreach ($kelompoklintasminat as $lintasminat) : ?>

                    <tr>
                        <td class="kel-center"><?= $no++ ?></td>
                        <td><?= $lintasminat['nama_mapel'] ?></td>
                        <td class="kel-center"><?= $lintasminat['nusp'] ?></td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    </div>
</body>

</html>