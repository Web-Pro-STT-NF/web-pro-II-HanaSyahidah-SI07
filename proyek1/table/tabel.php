<?php
require_once 'bmi.php';
require_once 'pasien.php';
require_once 'bmi_pasien.php';

$psn1 = new Pasien("P001","Ahmad");
$psn1->tmp_lahir="Jakarta";
$psn1->tgl_lahir="1999-05-02";
$psn1->email="ahmad12@gmail.com";
$psn1->gender="L";

$psn2 = new Pasien("P002","Rina");
$psn2->tmp_lahir="Tangerang";
$psn2->tgl_lahir="2000-10-07";
$psn2->email="Arinalmaa50@gmail.com";
$psn2->gender="P";

$psn3 = new Pasien("P003","Lutfi");
$psn3->tmp_lahir="Depok";
$psn3->tgl_lahir="1998-06-08";
$psn3->email="lutfiqiti57@gmail.com";
$psn3->gender="L";

$bmi1 = new Bmi(69.8,169,24.7,"Kelebihan Berat Badan");
$bmi2 = new Bmi(55.3,165,20.3,"Normal (Ideal)");
$bmi3 = new Bmi(45.2,171,15.4,"Kekurangan Berat Badan");

$bmp1 = new bmipasien($psn1,$bmi1,"2022-01-10");
$bmp2 = new bmipasien($psn2,$bmi2,"2022-01-10");
$bmp3 = new bmipasien($psn3,$bmi3,"2022-01-11");

$ar_tabel = [$bmp1,$bmp2,$bmp3];
?>
<h2>Data Pasien</h2>
<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Periksa</th>
            <th>Kode pasien</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Berat(kg)</th>
            <th>Tinggi(cm)</th>
            <th>Nilai BMI</th>
            <th>Status BMI</th>
        </tr>
    </thead>
    <center>
        <tbody>
            <?php
                $nomor=1;
                foreach($ar_tabel as $obj){
            ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$obj->tanggal?></td>
                    <td><?=$obj->pasien->kode?></td>
                    <td><?=$obj->pasien->nama?></td>
                    <td><?=$obj->pasien->gender?></td>
                    <td><?=$obj->bmi->berat_badan?></td>
                    <td><?=$obj->bmi->tinggi_badan?></td>
                    <td><?=$obj->bmi->nilai_bmi?></td>
                    <td><?=$obj->bmi->status_bmi?></td>
                </tr>
            <?php
                $nomor++;
                }
            ?>
        </tbody>
    </center>
</table>