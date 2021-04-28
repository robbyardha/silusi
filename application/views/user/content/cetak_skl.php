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
  width : 50%;
  border-width : 2px;
    }
    
    .tablename {
        font-family: Arial;
        font-size: 12pt;
        width: 400px;
        
    }
    
    .tabledata{
        width: 500px;
        size : 0px;
        margin-left: 2cm;
        margin-top: 1cm;
        text-align: center;
        font-family: arial;
        font-size:10pt;
    }
    .box1{
        height: 4cm;
        width: 3cm;
        right: 1600px;
        position: absolute;
        background-color: black;
        margin-top: 50px;
        border-style: solid;
        
    }
    
    .box1 .a {
        margin-top: 2cm;
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
</style>







<form><input class="noPrint" type="button" value="Print" onclick="window.print()"></form>
<div class="cetak-skl" style='width: 700px;padding:7px;'>
    <div style='width: 700px;font-family:arial;font-weight:bold;font-size:15pt;text-align:center;'>
        SURAT KETERANGAN LULUS
        <hr >
        Nomor : 375/KET/IV.4/SMAM.1/f/2021
    </div>
    <?php
    $tgl = $nilai_mapel[0]['tgl_lahir'];
    $data = date ("d F Y", strtotime($tgl));
    ?>
    
    <!--<div style='margin-top:27px;text-align:right;'>-->
        <br>
    <div style='width: 700;font-family:arial;font-size:11pt;text-align:left;'>
        Kepala SMA Muhammadiyah 1 Taman - Sidoarjo selaku  ketua penyelenggara Ujian Sekolah Tahun Pelajaran 2020/2021 berdasarkan : 
    </div><br>
    <div style='width: 700;font-family:arial;font-size:11pt;text-align:left;margin-left: 19px;;'>
         1. Ketuntasan dari seluruh program pembelajaran kurikulum 2013 <br><br>
         2. kriteria kelulusan dari satuan pendidikan sesuai dengan peraturan perundang undangan <br><br>
         3. Rapat Pleno Dewan Penduduk Tentang Kelulusan dan pengumuman kelulusan pada tanggal <strong>3 Mei 2021</dtrong><br>
         <br>
    </div>
    <div style='width: 700;font-family:arial;font-size:11pt;text-align:left;'>
        Menerangkan Bahwa : 
    </div>
    <div style='width: 700;font-family:arial;font-size:11pt;text-align:left;margin-left:20px;'>
        <table  class="tablename">
            
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><?= $nilai_mapel[0]['nama']?><br></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><?= $nilai_mapel[0]['nomor_ujian']?><br></td>
            </tr>
            <tr>
                <td>NIS </td>
                <td>:</td>
                <td><?= $nilai_mapel[0]['nis']?><br></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir </td>
                <td>:</td>
                <td><?= $nilai_mapel[0]['tempat_lahir']?>, <?= $data?><br></td>
            </tr>
            <tr>
                <td>Peminatan  </td>
                <td>:</td>
                <td><?= $nilai_mapel[0]['kelas']?></td>
            </tr>
            <tr>
                <td>Dinyatakan  </td>
                <td>:</td>
                <td><?= $nilai_mapel[0]['status_lulus']?></td>
            </tr>
           
        </table>
        <br>
        <div style='width: 700;font-family:arial;font-size:11pt;text-align:left;'>
        Dengan Nilai Sebagai Berikut
    </div>
    <?php
        $no = 1;
    ?>
    <table class="tabledata" border='1' cellspadding='2' cellspacing='0' >
        
            <thead>
                <th>No</th>
                <th>Nama Mapel </th>
                <th>Nilai raport</th>
                <th>NUSP</th>
                <th>NSP</th>
                
            </thead>
            <tbody>
               <?php foreach($nilai_mapel as $nm) :?>
                
                    <tr>
                        <td><?=$no++?></td>
                        <td><?= $nm ['nama_mapel']?></td>
                        <td><?= $nm ['nilai_rapot']?></td>
                        <td><?= $nm ['nusp']?></td>
                        <td><?= $nm ['nsp']?></td>
                    </tr>
                    
                    <?php endforeach?>
                    
                
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
                    <!--<?php var_dump($nilai_mapel); die;?>-->
                    </tbody>
                </table>
                <div class="box1">
    
            <a><center><br><br> Pas Foto 3 x 4 Cm</center></a>
    
        </div> 
    


</div>
    
        
       
