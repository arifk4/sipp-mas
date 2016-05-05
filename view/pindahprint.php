<?php
ob_start();
//Koneksi ke database
include("../config/config.php");
?>

<html>
<head>
  <title>Print Surat Pindah</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/css/print.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <br><br>
    <h3>Surat Keterangan Pindah Datang WNI</h3><br>
          <form class="form-horizontal">
            
            <table id="KK-induk" border="0">
              <tr>
                <td><h4>Daerah Asal</h4></td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Nomor Kartu Keluarga</label></td>
                <td>:</td>
                <td>325327515848959425</td>
              </tr>
             <tr>
                <td><label class="col-sm-4 control-label">Nama Kepala Keluarga</label></td>
                <td>:</td>
                <td>Romy Vergyano Surya Arifka</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Alamat</label></td>
                <td>:</td>
                <td>Jl. Halmahera Selatan III A no. 43</td>
                <td>RT/RW</td>
                <td>:</td>
                <td>011/004</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Desa/Kelurahan</label></td>
                <td>:</td>
                <td>Mliriprowo</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Kabupaten</label></td>
                <td>:</td>
                <td>Sidoarjo</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Provinsi</label></td>
                <td>:</td>
                <td>Jawa Timur</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Kode Pos</label></td>
                <td>:</td>
                <td>61265</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Telepon/HP</label></td>
                <td>:</td>
                <td>0318746723</td>
              </tr>
              <tr>
                <td><h4>Data Kepindahan</h4></td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Alasan Pindah</label></td>
                <td>:</td>
                <td>Pekerjaan</td>
              </tr>
               <tr>
                <td><label class="col-sm-4 control-label">Alamat Tujuan Pindah</label></td>
                <td>:</td>
                <td>Jl. Sumatra No. 100</td>
                <td>RT/RW</td>
                <td>:</td>
                <td>211/024</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Desa/Kelurahan</label></td>
                <td>:</td>
                <td>Satu Tujuan Bersama</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Kabupaten</label></td>
                <td>:</td>
                <td>Yogyakarta</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Provinsi</label></td>
                <td>:</td>
                <td>Yogyakarta</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Kode Pos</label></td>
                <td>:</td>
                <td>283952</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Telepon/HP</label></td>
                <td>:</td>
                <td>0318746723</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Klasifikasi Pindah</label></td>
                <td>:</td>
                <td>Antar Provinsi</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Jenis Kepindahan</label></td>
                <td>:</td>
                <td>Kep. Keluarga dan Seluruh Anggota Keluarga</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Status Nomor KK Bagi Yang Tidak Pindah</label></td>
                <td>:</td>
                <td>Tidak Ada Keluarga Yang Tinggal</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Status Nomor KK Bagi Yang Pindah</label></td>
                <td>:</td>
                <td>Membuat KK Baru</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Rencana tgl Pindah</label></td>
                <td>:</td>
                <td>10-01-2017</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Keluarga Yang Pindah</label></td>
              </tr>
            </table>
          </form>
          <br>
           <table id="KK-Pindah">
                  <tr>
                      <td>No</td>
                      <td>NIK</td>
                      <td>Nama</td>
                      <td>SHDK</td> 
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>38562835425932</td>
                      <td>Vergyano Surya</td>
                      <td></td> 
                  </tr>  
           </table>
          <br><br>
          <table id="ttd">
            <tr>
              <td><label>Diketahui Oleh,</label><br><br><br><br><br><br><label>Aan Alifuansyah S.Sos</label></td>
              <td><label>Pemohon,</label><br><br><br><br><br><br><label>Romy Vergyano</label></td>
              <td><label>Dikeluarkan Oleh,</label><br><label>Kepala desa/Lurah Mliriprowo</label><br><br><br><br><br><label>Ir. Dahlan</label></td>
            </tr>
           </table>
           <br><br><br><br><br><br><br><br><br>
           <table>
           
            <tr>
                <td><label class="col-sm-4 control-label">Nomor Kartu Keluarga</label></td>
                <td>:</td>
                <td>325327515848959425</td>
              </tr>
             <tr>
                <td><label class="col-sm-4 control-label">Nama Kepala Keluarga</label></td>
                <td>:</td>
                <td>Romy Vergyano Surya Arifka</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">NIK Kepala Keluarga</label></td>
                <td>:</td>
                <td>12571525102583</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Alamat</label></td>
                <td>:</td>
                <td>Jl. Halmahera Selatan III A no. 43</td>
                <td>RT/RW</td>
                <td>:</td>
                <td>011/004</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Desa/Kelurahan</label></td>
                <td>:</td>
                <td>Mliriprowo</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Kabupaten</label></td>
                <td>:</td>
                <td>Sidoarjo</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Provinsi</label></td>
                <td>:</td>
                <td>Jawa Timur</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Kode Pos</label></td>
                <td>:</td>
                <td>61265</td>
              </tr>
              <tr>
                <td><label class="col-sm-4 control-label">Telepon/HP</label></td>
                <td>:</td>
                <td>0318746723</td>
              </tr>
              <tr>
            </table> 
             <table id="KK-Pindah">
                  <tr>
                      <td>No</td>
                      <td>NIK</td>
                      <td>Nama</td>
                      <td>SHDK</td> 
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>38562835425932</td>
                      <td>Vergyano Surya</td>
                      <td></td> 
                  </tr>  
           </table>
          <br><br>
          <table id="ttd">
            <tr>
              <td><label>Diketahui Oleh,</label><br><br><br><br><br><br><label>Aan Alifuansyah S.Sos</label></td>
              <td><label>Pemohon,</label><br><br><br><br><br><br><label>Romy Vergyano</label></td>
              <td><label>Dikeluarkan Oleh,</label><br><label>Kepala desa/Lurah Mliriprowo</label><br><br><br><br><br><label>Ir. Dahlan</label></td>
            </tr>
           </table>
</body>
</html>
 
<?php
$out = ob_get_contents();
ob_end_clean();
include("../lib/mpdf/mpdf.php");
$mpdf = new mPDF('c','legal','');
$mpdf->SetDisplayMode('fullpage');
$stylesheet = file_get_contents('../lib/mpdf/mpdf.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($out);
$mpdf->Output();
?>
