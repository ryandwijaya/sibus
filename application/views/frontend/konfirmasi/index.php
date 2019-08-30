 <div id="features">
  <div class="container">
  
   <div class="sep-border"></div> <!-- Separator -->
  
   <div class="header">
    <h3>Konfirmasi Pemesanan</h3>
   
   </div>
   <div class="row" style="justify-content: center;">
   	<div class="col-md-6" style="display: flex;">
   		<form action="<?= base_url() ?>konfirmasi" method="post">
   		<input type="text" name="pemesanan_kode" style="height: 40px;outline: none;width: 360px;" required>
   		<button style="width: 100px; height: 40px; outline: none;border: 0;background-color: lightgreen;border-radius: 5px;" type="submit" name="submit">Cari</button>
   		</form>
   	</div>
   </div>
   <hr>
   <div class="row">
   	<div class="col-md-12">
   		<table class="table table-striped table-bordered">
   			<tr>
   				<th>Nama</th>
   				<th>Kode Pemesanan</th>
   				<th>Tujuan</th>
   				<th>Tgl Berangkat</th>
   				<th>Jam</th>
   				<th>Total Bayar</th>
   				<th style="text-align: center;">Pilihan</th>
   			</tr>
   			<tr>
   				<td><?= $pemesanan['tiket_nama'] ?></td>
   				<td><?= $pemesanan['tiket_kode'] ?></td>
   				<td><?= $pemesanan['tujuan_lokasi'] ?></td>
   				<td><?= $pemesanan['jadwal_tgl_berangkat'] ?></td>
   				<td><?= $pemesanan['jadwal_jam_berangkat'] ?></td>
   				<td>Rp. <?= rupiah($pemesanan['tiket_total_bayar']) ?> ,-</td>
   				<td style="text-align: center;">
   					<?php if ($pemesanan['tiket_nama']!=''): ?>
   					
                  <?php $get_konfirmasi = $this->Konfirmasi->getKonfirmasiByTiket($pemesanan['tiket_id']); ?>
                  <?php if ($get_konfirmasi['konfirmasi_status']=='valid'){ ?>
                        <a href="<?= base_url() ?>printTiket/<?= $pemesanan['tiket_id'] ?>" style="width: 100px; height: 30px; padding: 5px; outline: none;border: 0;background-color: #009688;color:white;border-radius: 5px;">Print</a>
                     <?php }else{ ?>   
   					<a href="<?= base_url() ?>pemesanan/batal/<?= $pemesanan['tiket_id'] ?>" onclick="return confirm('Yakin ingin membatalkan pemesanan?')" style="width: 100px; height: 30px; padding: 5px; outline: none;border: 0;background-color: red;color:white;border-radius: 5px;">Batalkan</a>
   					<a href="<?= base_url() ?>bayar/<?= $pemesanan['tiket_kode'] ?>" style="width: 100px; height: 30px; padding: 5px; outline: none;border: 0;background-color: lightblue;border-radius: 5px;">Konfirmasi</a>
                  <?php } ?>


   					<?php endif ?>
   				</td>
   			</tr>
   		</table>
   	</div>
   </div>
   
  
  </div> <!-- End Container -->
 </div> <!-- End Features -->