<?php
ob_start();
//Koneksi ke database

include("../lib/config/connect.php");
$sql=mysql_query("SELECT * FROM pindah");
$data=mysql_fetch_assoc($sql);
?>

<html>
<head>
  <title>Print Surat Pindah</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/css/print.css" media="print" type="text/css" rel="stylesheet" />
</head>
<body>
    <table width="100%" border="0">
        <tr>
            <td align="center" width="20%"><img src="../assets/img/logo.png" width="10%"></td>
            <td align="center" width="60%"><font size="6"><b>PEMERINTAH KABUPATEN SIDOARJO<br>
                         KECAMATAN TARIK</b><br></font>
            <font size="4"><i>Jl. Raya Tarik No. 01 Telp (031) 8971004</i><br><font size="6"><b>TARIK</b></font>
            </td>
            <td align="center" width="20%"></td>
        </tr>
        <tr>
            <td colspan="3" align="right" width="20%">Kode Pos 61265</td>
        </tr>
    </table>
    <hr size="8" color="black">
    <?php
    echo '
    <table id="surat" style="page-break-after:avoid" border="0">
      <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="10"><p>Nomor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 475/114/404.7.12/2016</p><p>Sifat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Penting</p><p>Lampiran&nbsp;&nbsp;&nbsp;&nbsp;: 1 Lembar</p><p>Perihal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: PIndah Tempat Tinggal</p></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="8"><p>Tarik, 24 Maret 2016</p><br><p>Kepada</p><p>Yth. Sdr. Kepala Desa/Kelurahan</p><p>WATESARI</p><p>Kec. BALONGBENDO</p><p>di</p><p><u>WATESARI</u></p></td>
          
      </tr>
      <tr>
        <td><br><br><br><br></td>
      </tr>
      <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="26"><p id="suratpin">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bersama ini disampaikan dengan hormat surat
          keterangan pindah tempat tinggal atas nama Sdr. '.$data['namakk'].', Desa : '.$data['desa'].', Kecamatan : '.$data['kec'].', Kabupaten : '.$data['kab'].', Provinsi : '.$data['prov'].'
          dengan harapan yang bersangkutan dapatnya diterima sebagai Penduduk Desa Saudara dan memperoleh pembinaan dari
          Desa / Kelurahan serta diberikan ganti Kartu Tanda Penduduk (E-KTP) yang baru, Sedangkan KTP yang lama dicabut.</p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian untuk menjadikan periksa.</p></td>
      </tr>
      <tr>
        <td><br><br><br><br><br><br><br></td>
      </tr>
      <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="13"><p>TEMBUSAN : <br> Yth. Sdr. CAMAT - BALONGBENDO</p></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="6"><p>Diketahui Oleh,</p><p>An. Camat Tarik</p><p>Sekcam</p><br><img src="../assets/img/ttd1.png"><br><br><p><u>Ruslan, SH.</u></p><p>NIP. 14742535653622358</p></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
      </tr>
    </table>';
    ?>
  
    <h3>SURAT KETERANGAN PINDAH DATANG WNI</h3>
          <?php
          echo '
          <form class="form-horizontal">
                    <table border="0">
                    <tr>
                      <td colspan="24"><p><b>DATA DAERAH ASAL</b></p></td>
                    </tr>
                    <tr>
                      <td colspan="2">1.</td>
                      <td colspan="2"><p>Nomor Kartu Keluarga</p></td>
                      <td>&nbsp;</td>
                      <td colspan="14" id="bd1">'.$data['nokk'].'</td>
                    </tr>
                   <tr>
                      <td colspan="2">2.</td>
                      <td colspan="2"><p>Nama Kepala Keluarga</p></td>
                      <td>&nbsp;</td>
                      <td colspan="20" id="bd1">'.$data['namakk'].'</td>
                    </tr>
                    <tr>
                      <td colspan="2">3.</td>
                      <td colspan="2"><p>Alamat</p></td>
                      <td>&nbsp;</td>
                      <td colspan="6" id="bd1">'.$data['alamat'].'</td>
                      <td>RT</td>
                      <td colspan="4" id="bd1">011</td>
                      <td>RW</td>
                      <td colspan="4" id="bd1">004</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="2"><p>a.  Desa/Kelurahan</p></td>
                      <td>&nbsp;</td>
                      <td colspan="4" id="bd1">'.$data['desa'].'</td>
                      <td colspan="2"><p>c.  Kab/Kota</p></td>
                      <td colspan="13" id="bd1">'.$data['kab'].'</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="2"><p>b.  Kecamatan</p></td>
                      <td>&nbsp;</td>
                      <td colspan="4" id="bd1">'.$data['kec'].'</td>
                      <td colspan="2"><p>d.  Provinsi</p></td>
                      <td colspan="13" id="bd1">'.$data['prov'].'</td>
                    </tr>
                    <tr>
                      <td colspan="4"></td>
                      <td>&nbsp;</td>
                      <td colspan="1"><p>Kode Pos</p></td>
                      <td colspan="3" id="bd1">'.$data['kodepos'].'</td>
                      <td colspan="2"><p>Telepon</p></td>
                      <td colspan="13" id="bd1">'.$data['telp'].'</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="24"><p><b>DATA KEPINDAHAN</b></p></td>
                    </tr>
                    <tr>
                      <td colspan="2">1.</td>
                      <td colspan="2"><p>Alasan Pindah</p></td>
                      <td>&nbsp;</td>
                      <td colspan="19" id="bd1">Pekerjaan</td>
                    </tr>
                     <tr>
                      <td colspan="2">2.</td>
                      <td colspan="2"><p>Alamat Tujuan Pindah</p></td>
                      <td>&nbsp;</td>
                      <td colspan="6" id="bd1">'.$data['alamat'].'</td>
                      <td>RT</td>
                      <td colspan="4" id="bd1">011</td>
                      <td>RW</td>
                      <td colspan="4" id="bd1">004</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="2"><p>a.  Desa/Kelurahan</p></td>
                      <td>&nbsp;</td>
                      <td colspan="4" id="bd1">'.$data['desa'].'</td>
                      <td colspan="2"><p>c.  Kab/Kota</p></td>
                      <td colspan="13" id="bd1">'.$data['kab'].'</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="2"><p>b.  Kecamatan</p></td>
                      <td>&nbsp;</td>
                      <td colspan="4" id="bd1">'.$data['kec'].'</td>
                      <td colspan="2"><p>d.  Provinsi</p></td>
                      <td colspan="13" id="bd1">'.$data['prov'].'</td>
                    </tr>
                    <tr>
                      <td colspan="4"></td>
                      <td>&nbsp;</td>
                      <td colspan="1"><p>Kode Pos</p></td>
                      <td colspan="3" id="bd1">'.$data['kodepos'].'</td>
                      <td colspan="2"><p>Telepon</p></td>
                      <td colspan="13" id="bd1">'.$data['telp'].'</td>
                    </tr>
                    <tr>
                      <td colspan="2">3.</td>
                      <td colspan="2"><p>Klasifikasi Pindah</p></td>
                      <td>&nbsp;</td>
                      <td colspan="19" id="bd1">Dalam Satu desa/kelurahan</td>
                    </tr>
                    <tr>
                      <td colspan="2">4.</td>
                      <td colspan="2"><p>Jenis Kepindahan</p></td>
                      <td>&nbsp;</td>
                      <td colspan="19" id="bd1">Kep. Keluarga dan Seluruh Anggota Keluarga</td>
                    </tr>
                    <tr>
                      <td colspan="2">5.</td>
                      <td colspan="2"><p>Status Nomor KK Bagi Yang Tidak Pindah</p></td>
                      <td>&nbsp;</td>
                      <td colspan="19" id="bd1">Tidak Ada Keluarga Yang Tinggal</td>
                    </tr>
                    <tr>
                      <td colspan="2">6.</td>
                      <td colspan="2"><p>Status Nomor KK Bagi Yang Pindah</p></td>
                      <td>&nbsp;</td>
                      <td colspan="19" id="bd1">Nama Kep. Keluarga dan Nomor KK Tetap</td>
                    </tr>
                    <tr>
                      <td colspan="2">7.</td>
                      <td colspan="2"><p>Rencana Tgl Pindah</p></td>
                      <td>&nbsp;</td>
                      <td colspan="8" id="bd1">22 July 2016</td>
                    </tr>
                    <tr>
                      <td colspan="2">8.</td>
                      <td colspan="2"><p>Keluarga Yang Pindah</p></td>
                      <td>&nbsp;</td>
                      <td colspan="19"></td>
                    </tr>
                    <tr>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td colspan="2" id="bd1">No</td>
                       <td colspan="6" id="bd1">NIK</td>
                       <td colspan="9" id="bd1">Nama</td>
                       <td colspan="2" id="bd1">SHDK</td> 
                    </tr>
                    <tr>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td colspan="2" id="bd1">1</td>
                       <td colspan="6" id="bd1">38562835425932</td>
                       <td colspan="9" id="bd1">Vergyano Surya</td>
                       <td id="bd1"></td>
                       <td id="bd1"></td>
                    </tr>
                 </table>';
                ?>
                <?php
                echo '
                 <table id="ttd">
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><p>Diketahui Oleh,</p><p>An. Camat Tarik</p><p>Sekcam</p><br><img src="../assets/img/ttd1.png"><br><br><p><u>Ruslan, SH.</u></p><p>NIP. 14742535653622358</p></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><p>Pemohon,</p><br><img src="../assets/img/ttd2.png"><br><br><p><u>'.$data['namakk'].'</u></p></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><p>Dikeluarkan Oleh,</p><p>Plt. Kepala desa/Lurah Mliriprowo</p><p>No. 11 / 22 May 2016</p><br><img src="../assets/img/ttd3.png"><br><p><u>Ir. Dahlan</u></p><p>NIP. 14732375653622358</p></td>
                  </tr>
                 </table>';
                 ?>
                 <?php
                 echo '
                 <table border="0">
                    <tr>
                      <td colspan="24"><p><b>DATA DAERAH TUJUAN</b></p></td>
                    </tr>
                    <tr>
                      <td colspan="2">1.</td>
                      <td colspan="2"><p>Nomor Kartu Keluarga</p></td>
                      <td>&nbsp;</td>
                      <td colspan="14" id="bd1">'.$data['nokk'].'</td>
                    </tr>
                   <tr>
                      <td colspan="2">2.</td>
                      <td colspan="2"><p>Nama Kepala Keluarga</p></td>
                      <td>&nbsp;</td>
                      <td colspan="20" id="bd1">'.$data['namakk'].'</td>
                    </tr>
                    <tr>
                      <td colspan="2">1.</td>
                      <td colspan="2"><p>NIK Kepala Keluarga</p></td>
                      <td>&nbsp;</td>
                      <td colspan="14" id="bd1">'.$data['nokk'].'</td>
                    </tr>
                    <tr>
                      <td colspan="2">6.</td>
                      <td colspan="2"><p>Status Nomor KK Bagi Yang Pindah</p></td>
                      <td>&nbsp;</td>
                      <td colspan="19" id="bd1">Nama Kep. Keluarga dan Nomor KK Tetap</td>
                    </tr>
                    <tr>
                      <td colspan="2">7.</td>
                      <td colspan="2"><p>Rencana Tgl Pindah</p></td>
                      <td>&nbsp;</td>
                      <td colspan="8" id="bd1">22 July 2016</td>
                    </tr>
                    <tr>
                      <td colspan="2">3.</td>
                      <td colspan="2"><p>Alamat</p></td>
                      <td>&nbsp;</td>
                      <td colspan="6" id="bd1">'.$data['alamat'].'</td>
                      <td>RT</td>
                      <td colspan="4" id="bd1">011</td>
                      <td>RW</td>
                      <td colspan="4" id="bd1">004</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="2"><p>a.  Desa/Kelurahan</p></td>
                      <td>&nbsp;</td>
                      <td colspan="4" id="bd1">'.$data['desa'].'</td>
                      <td colspan="2"><p>c.  Kab/Kota</p></td>
                      <td colspan="13" id="bd1">'.$data['kab'].'</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="2"><p>b.  Kecamatan</p></td>
                      <td>&nbsp;</td>
                      <td colspan="4" id="bd1">'.$data['kec'].'</td>
                      <td colspan="2"><p>d.  Provinsi</p></td>
                      <td colspan="13" id="bd1">'.$data['prov'].'</td>
                    </tr>
                    <tr>
                      <td colspan="4"></td>
                      <td>&nbsp;</td>
                      <td colspan="1"><p>Kode Pos</p></td>
                      <td colspan="3" id="bd1">'.$data['kodepos'].'</td>
                      <td colspan="2"><p>Telepon</p></td>
                      <td colspan="13" id="bd1">'.$data['telp'].'</td>
                    </tr>
                    <tr>
                      <td colspan="2">8.</td>
                      <td colspan="2"><p>Keluarga Yang Datang</p></td>
                      <td>&nbsp;</td>
                      <td colspan="19"></td>
                    </tr>
                    <tr>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td colspan="2" id="bd1">No</td>
                       <td colspan="6" id="bd1">NIK</td>
                       <td colspan="9" id="bd1">Nama</td>
                       <td colspan="2" id="bd1">SHDK</td> 
                    </tr>
                    <tr>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td colspan="2" id="bd1">1</td>
                       <td colspan="6" id="bd1">38562835425932</td>
                       <td colspan="9" id="bd1">Vergyano Surya</td>
                       <td id="bd1"></td>
                       <td id="bd1"></td>
                    </tr>
                  </table>';
                  ?>
                  <?php
                echo '
                 <table id="ttd">
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><p>Diketahui Oleh,</p><p>An. Camat Tarik</p><p>Sekcam</p><br><img src="../assets/img/ttd1.png"><br><br><p><u>Ruslan, SH.</u></p><p>NIP. 14742535653622358</p></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><p>Dikeluarkan Oleh,</p><p>Plt. Kepala desa/Lurah Mliriprowo</p><p>No. 11 / 22 May 2016</p><br><img src="../assets/img/ttd3.png"><br><p><u>Ir. Dahlan</u></p><p>NIP. 14732375653622358</p></td>
                  </tr>
                 </table>';
                 ?>
          </form>
</body>
</html>
 
<?php
$out = ob_get_contents();
ob_end_clean();
include("../lib/mpdf/mpdf.php");
$mpdf = new mPDF('c','legal','');
$mpdf->SetDisplayMode('fullpage');
$stylesheet = file_get_contents('../assets/css/print.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->AddPage();
$mpdf->WriteHTML($out);
$mpdf->Output('surat_pindah_datang.pdf','I');
?>
