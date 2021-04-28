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
            font-family: arial;
            font-weight: bold;
            font-size: 15pt;
            text-align: center;
        }

        .head-hr {
            width: 10cm;
            align-items: center;
        }

        .pernyataan {
            width: 700px;
            font-family: arial;
            font-size: 12pt;
            text-align: left;
            margin-left: 20px
        }

        .item-pernyataan {
            width: 700px;
            font-family: arial;
            font-size: 12pt;
            text-align: left;
            margin-left: 10px;
            ;
        }

        .menerangkan {
            width: 850px;
            font-family: arial;
            font-size: 12pt;
            text-align: left;
            margin-left: 20px;
        }

        .table-data-diri {
            width: 850px;
            font-family: arial;
            font-size: 12pt;
            text-align: left;
            margin-left: 40px;
        }

        .sbgbrkt {
            width: 700;
            font-family: arial;
            font-size: 12pt;
            text-align: left;
        }

        .foto {
            height: 4cm;
            width: 3cm;
            border-style: solid;
            background-color: #FFFFFF;
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
            padding: 10px;
            height: 300px;
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
            bottom: 0px;
            left: 0px;
            /** The width and height may change 
                    according to the dimensions of your letterhead
                **/
            width: 21.59cm;
            height: 35.56cm;

            /** Your watermark should be behind every content**/
            z-index: -1000;
            opacity: 0.5;
        }
    </style>
    <div id="watermark">
        <img src="<?= "assets/images/ttdpakarif.png" ?>" height="100%" width="100%" />
    </div>

    <div class="margintop"></div>
    <div class="cetak-skl">
        <div class="col-cetak-skl">
            <?php
            $nomor_surat = "255/KET/IV.4/SMAM.1/F/2021";
            $tgl_lulus = "03 Mei 2021";
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
            Kepala SMA Muhammadiyah 1 Taman - Sidoarjo selaku ketua penyelenggara Ujian Sekolah Tahun Pelajaran 2020/2021 berdasarkan :
        </div>
        <div class="item-pernyataan">
            <ol>
                <li>Ketuntasan dari seluruh program pembelajaran kurikulum 2013</li>
                <li>kriteria kelulusan dari satuan pendidikan sesuai dengan peraturan perundang undangan</li>
                <li>Rapat Pleno Dewan Penduduk Tentang Kelulusan dan pengumuman kelulusan pada tanggal <strong><?= $tgl_lulus ?></strong></li>
            </ol>
        </div>
        <div class="menerangkan">
            Menerangkan Bahwa :
        </div>
        <div class="table-data-diri">
            <table>
                <tr>
                    <td>Nama </td>
                    <td>:</td>
                    <td><?= $nilai_mapel[0]['nama'] ?><br></td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td><?= $nilai_mapel[0]['nomor_ujian'] ?><br></td>
                </tr>
                <tr>
                    <td>NIS </td>
                    <td>:</td>
                    <td><?= $nilai_mapel[0]['nis'] ?><br></td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir </td>
                    <td>:</td>
                    <td><?= $nilai_mapel[0]['tempat_lahir'] ?>, <?= $new_date ?><br></td>
                </tr>
                <tr>
                    <td>Peminatan </td>
                    <td>:</td>
                    <td><?= $nilai_mapel[0]['kelas'] ?></td>
                </tr>
                <tr>
                    <td>Dinyatakan </td>
                    <td>:</td>
                    <td><?= $nilai_mapel[0]['status_lulus'] ?></td>
                </tr>
            </table>
            <br>
            <div class="sbgbrkt">
                Dengan Nilai Sebagai Berikut
            </div>
            <?php
            $no = 1;
            ?>
            <table border='1' cellspadding='2' cellspacing='0' width="70%">

                <tr>
                    <th><strong>No</strong></th>
                    <th><strong>Nama Mata Pelajaran </strong></th>
                    <th><strong>NR (Nilai Rata-Rata Rapot)</strong></th>
                    <th><strong>NUSP</strong></th>
                    <th><strong>NSP</strong></th>
                </tr>
                <tbody>
                    <?php foreach ($nilai_mapel as $nm) : ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $nm['nama_mapel'] ?></td>
                            <td><?= $nm['nilai_rapot'] ?></td>
                            <td><?= $nm['nusp'] ?></td>
                            <td><?= $nm['nsp'] ?></td>
                        </tr>

                    <?php endforeach ?>


                    <tr>
                        <td colspan="4"><strong>Rata Rata</strong></td>
                        <td colspan="1"><Strong>
                                <?php
                                if ($nilai_mapel[0]['kelas'] == "IPA") {
                                    $sum_avg_ipa = $nilai_mapel[0]['nsp'] + $nilai_mapel[1]['nsp'] + $nilai_mapel[2]['nsp'] + $nilai_mapel[3]['nsp'] + $nilai_mapel[4]['nsp'] + $nilai_mapel[5]['nsp'] + $nilai_mapel[6]['nsp'] + $nilai_mapel[7]['nsp'] + $nilai_mapel[8]['nsp'] + $nilai_mapel[9]['nsp'] + $nilai_mapel[10]['nsp'] + $nilai_mapel[11]['nsp'] + $nilai_mapel[12]['nsp'] + $nilai_mapel[13]['nsp'] +  $nilai_mapel[18]['nsp'];
                                    $count_mapel_ipa = 15;
                                    $result = $sum_avg_ipa / $count_mapel_ipa;
                                } elseif ($nilai_mapel[0]['kelas'] == "IPS") {
                                    $sum_avg_ips = $nilai_mapel[0]['nsp'] + $nilai_mapel[1]['nsp'] + $nilai_mapel[2]['nsp'] + $nilai_mapel[3]['nsp'] + $nilai_mapel[4]['nsp'] + $nilai_mapel[5]['nsp'] + $nilai_mapel[6]['nsp'] + $nilai_mapel[7]['nsp'] + $nilai_mapel[8]['nsp'] + $nilai_mapel[9]['nsp'] + $nilai_mapel[14]['nsp'] + $nilai_mapel[15]['nsp'] + $nilai_mapel[16]['nsp'] + $nilai_mapel[17]['nsp'] + $nilai_mapel[18]['nsp'];
                                    $count_mapel_ips = 15;
                                    $result = $sum_avg_ips / $count_mapel_ips;
                                }

                                echo (number_format($result, 2));
                                ?></strong></td>

                    </tr>
                </tbody>
            </table>

            <div class="row">
                <div class="column">
                    <div class="foto" style="float: right;margin-top:1cm">
                        <p>3X4</p>
                    </div>

                </div>
                <div class="column">
                    <div>
                        <div class="ttdbox">
                            Taman, 03 Mei 2021
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
                            <img src="<?= "assets/images/ttdpakarif.png" ?>" height="55px" alt="" srcset="">
                            <br>
                            <p>
                                <u><strong>Drs. Zainal Arif Fakhrudi</strong></u>
                                <br>
                                NBM.767.792
                            </p>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>