<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sistem Informasi Kelulusan | SILUSI | ARDHACODES.COM" name="description" />
    <meta content="ARDHACODES" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/landingusers-assets/') ?>images/arcodes.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landingusers-assets/') ?>css/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/landingusers-assets/') ?>css/materialdesignicons.min.css" />
    <link href="<?= base_url('assets/') ?>css/icons.min.css" rel="stylesheet" type="text/css" />
    <!--pe-7 Icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/landingusers-assets/') ?>css/pe-icon-7-stroke.css" />

    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/landingusers-assets/') ?>css/magnific-popup.css">

    <!-- Custom  sCss -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/landingusers-assets/') ?>css/style.css" />

</head>

<body>

    <style type="text/css">
        @media print {
            input.noPrint {
                display: none;
            }
        }

        hr {
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            width: 50%;
            border-width: 2px;
        }

        .tablename {
            font-family: Arial;
            font-size: 12pt;
            width: 400px;

        }

        .tabledata {
            width: 500px;
            size: 0px;
            margin-left: 2cm;
            margin-top: 1cm;
            text-align: center;
            font-family: arial;
            font-size: 10pt;
        }

        .box1 {
            height: 4cm;
            width: 3cm;
            right: 1600px;
            position: absolute;
            margin-top: 50px;


        }

        .boxttd {
            width: 200px;
            text-align: right;
            margin-left: 550px;
            margin-top: 52px;
        }

        p {
            text-align: left;
            margin-left: 20px;
        }

        .raport th {
            border: 1px solid #000;
        }

        .raport td {
            border: 1px solid #000;
            font-weight: normal;
        }

        .khusus td {
            text-align: center;
            border: 2px solid #000;
        }

        .khusus th {
            border: 2px solid #000;
        }

        td {
            height: 30px;
        }

        .pagebreak {
            page-break-after: always;
        }

        .pagebreak {
            page-break-after: always;
        }

        .header td {
            padding: 0px;
            height: 25px;
        }

        .square {
            height: 4cm;
            width: 3cm;
            border-style: solid;
            background-color: #FFFFFF;
        }

        .hr-width {
            width: 15cm;
            border-style: 2px solid;
            height: 2px;
            background-color: #000000;
        }
    </style>







    <!-- <form><input class="noPrint" type="button" value="Print" onclick="window.print()"></form> -->
    <div class="cetak-skl" style='width: 850px;padding:7px;'>
        <div style='width: 850px;font-family:arial;font-weight:bold;font-size:15pt;text-align:center;'>
            <?php
            $nomor_surat = "255/KET/IV.4/SMAM.1/F/2021";
            $tgl_lulus = "03 Mei 2021";
            $tmp_lulus = "Taman";
            ?>
            SURAT KETERANGAN LULUS
            <div class="hr-width d-flex mx-auto align-self-center"></div>
            Nomor : <?= $nomor_surat ?>
        </div>
        <?php
        $tgl = $nilai_mapel[0]['tgl_lahir'];
        $data = date("d F Y", strtotime($tgl));
        ?>

        <!--<div style='margin-top:27px;text-align:right;'>-->
        <br>
        <div style='width: 850px;font-family:arial;font-size:11pt;text-align:left;margin-left:20px'>
            Kepala SMA Muhammadiyah 1 Taman - Sidoarjo selaku ketua penyelenggara Ujian Sekolah Tahun Pelajaran 2020/2021 berdasarkan :
        </div>
        <div style='width: 850px;font-family:arial;font-size:11pt;text-align:left;margin-left: 40px;;'><br>
            1. Ketuntasan dari seluruh program pembelajaran kurikulum 2013 <br><br>
            2. kriteria kelulusan dari satuan pendidikan sesuai dengan peraturan perundang undangan <br><br>
            3. Rapat Pleno Dewan Penduduk Tentang Kelulusan dan pengumuman kelulusan pada tanggal <strong><?= $tgl_lulus ?></strong><br>
            <br>
        </div>
        <div style='width: 850px;font-family:arial;font-size:11pt;text-align:left;margin-left:20px;'>
            Menerangkan Bahwa :
        </div>
        <div style='width: 850px;font-family:arial;font-size:11pt;text-align:left;margin-left:40px;'>
            <table class="tablename">

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
                    <td><?= $nilai_mapel[0]['tempat_lahir'] ?>, <?= $data ?><br></td>
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
            <div style='width: 700;font-family:arial;font-size:11pt;text-align:left;margin-left:16px;'>
                Dengan Nilai Sebagai Berikut
            </div>
            <?php
            $no = 1;
            ?>
            <table class="tabledata" border='1' cellspadding='2' cellspacing='0'>

                <thead>
                    <th><strong>No</strong></th>
                    <th><strong>Nama Mata Pelajaran </strong></th>
                    <th><strong>Nilai raport</strong></th>
                    <th><strong>NUSP</strong></th>
                    <th><strong>NSP</strong></th>

                </thead>
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


            <div class="box1">

            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="square float-md-right mt-4">
                            <p class="text-center mt-5">3X4</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="ttd mt-4">
                            <?= $tmp_lulus ?>, <?= $tgl_lulus ?>
                            <br>
                            Kepala sekolah
                            <br>
                            <br>
                            <br>
                            <br>

                            <u><strong>Drs. Zainal Arif Fakhrudi</strong></u>
                            <br>
                            NBM.767.792
                        </div>
                    </div>
                </div>




            </div>



            <!-- javascript -->
            <script src="<?= base_url('assets/landingusers-assets/') ?>js/jquery.min.js"></script>
            <script src="<?= base_url('assets/landingusers-assets/') ?>js/bootstrap.bundle.min.js"></script>
            <script src="<?= base_url('assets/landingusers-assets/') ?>js/jquery.easing.min.js"></script>
            <script src="<?= base_url('assets/landingusers-assets/') ?>js/scrollspy.min.js"></script>

            <!-- Magnific Popup -->
            <script src="<?= base_url('assets/landingusers-assets/') ?>js/jquery.magnific-popup.min.js"></script>

            <!-- counter js -->
            <script src="<?= base_url('assets/landingusers-assets/') ?>js/counter.int.js"></script>

            <!-- custom js -->
            <script src="<?= base_url('assets/landingusers-assets/') ?>js/app.js"></script>
</body>

</html>