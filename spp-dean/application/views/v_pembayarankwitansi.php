
<?php 
	$rkwitansi=$kwitansi->row_array();
  $tgl = tgl_indo($rkwitansi['tgl_bayar']);
  $tgl1 = pmbyrn($rkwitansi['tgl_bayar']);
  
?>
<!DOCTYPE html>
<html lang="en" id="areaprint">
  <head>
    <meta charset="utf-8">
    <title>Admin SPP - Bukti Pembayaran</title>
    <link rel="stylesheet" href="<?php echo base_url();?>invoice/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="<?php echo base_url();?>invoice/Logo_SMKIP.png">
      </div>
      <h1>KWITANSI PEMBAYARAN SPP SMK IGAPIN</h1>
      <div id="company" class="clearfix">
        <div>SMK I</div>
        <div>Jl. Cisaranten Kulon,<br /> Kota Bandung, Jawa Barat</div>
        <div>(628) 342-6578</div>
        <div><a href="#">www.smkigapin.sch.id</a></div>
      </div>
      <div id="project">
      <div><span>NO PEMBAYARAN</span> <?php echo $rkwitansi['id_pembayaran'];?>/<?php echo $tgl1; ?></div>
        <div><span>NISN / NIS</span> <?php echo $rkwitansi['nisn'];?> / <?php echo $rkwitansi['nis'];?></div>
        <div><span>NAMA SISWA</span> <?php echo $rkwitansi['nama'];?></div>
        <div><span>KELAS</span> <?php echo $rkwitansi['nama_kelas'];?></div>
        <div><span>KOMPETENSI KEAHLIAN</span> <?php echo $rkwitansi['kompetensi_keahlian'];?></div>
        <div><span>TANGGAL PEMBAYARAN</span> <?php echo $tgl; ?></div>
        <div><span>NAMA PETUGAS</span> <?php echo $rkwitansi['nama_petugas'];?></div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="desc" width="80%">KETERANGAN</th>
            <th width="20%">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="desc">Pembayaran SPP Bulan <?php echo $rkwitansi['bulan_dibayar'];?> Tahun <?php echo $rkwitansi['tahun_dibayar'];?></td>
            <td class="total">Rp. <?php echo number_format($rkwitansi['jumlah_bayar'],2,",",".");?></td>
          </tr>
            <td colspan="" class="grand total">GRAND TOTAL</td>
            <td class="grand total">Rp. <?php echo number_format($rkwitansi['jumlah_bayar'],2,",",".");?></td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Bukti pembayaran jangan sampai hilang.</div>
      </div>
    </main>
  </body>
</html>

<?php

  function pmbyrn($tgl1){
    $tanggal = substr($tgl1,8,2);
    $bulan = substr($tgl1,5,2);
    $tahun = substr($tgl1,0,4);
    return $tanggal.'/'.$bulan.'/'.$tahun;		 
  }	

	function tgl_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;		 
	}	

	function getBulan($bln){
				switch ($bln){
					case 1: 
						return "Januari";
						break;
					case 2:
						return "Februari";
						break;
					case 3:
						return "Maret";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Juni";
						break;
					case 7:
						return "Juli";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "Oktober";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "Desember";
						break;
				}
	}
?>
