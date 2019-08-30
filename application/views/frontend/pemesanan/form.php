 <div id="features">
  <div class="container">
  
   <div class="sep-border"></div> <!-- Separator -->
  
   <div class="header">
    <h3>Form Pemesanan</h3>
   
   </div>
   <form action="<?= base_url() ?>pemesanan/create" method="post">
   <div class="row-fluid row">
     <div class="col-md-8">
     	<div class="row">
     		<div class="col-md-12">
     			<div class="form-group">
     				<label for="">Nama</label>
     				<input type="text" class="form-control" name="detail_nama" required>
     			</div>
     		</div>
     	</div>
     	<div class="row">
     		<div class="col-md-12">
     			<div class="form-group">
     				<label for="">Nomor HP</label>
     				<input type="text" class="form-control" name="detail_nope" required>
     			</div>
     		</div>
     	</div>
     	<div class="row">
     		<div class="col-md-12">
     			<div class="form-group">
     				<label for="">Jumlah Seat</label>
     				<input type="number" min="1" class="form-control" name="pemesanan_seat" style="height: 40px;" required>
     			</div>
     		</div>
     	</div>
     	<div class="row">
     		<div class="col-md-12">
     			<div class="form-group">
     				<label for="">Email</label>
     				<input type="text" class="form-control" name="detail_email" required>
     			</div>
     		</div>
     	</div>
        <input type="hidden" name="jadwal_id" value="<?= $this->uri->segment(3); ?>">
     </div>
     <div class="col-md-4 p-4">
     	<table>
     		<tr>
     			<td>Tujuan</td>
     			<td>:</td>
     			<td><?= $jadwal['tujuan_lokasi'] ?></td>
     		</tr>
     		<tr>
     			<td>Tanggal Berangkat</td>
     			<td>:</td>
     			<td><?= date_indo($jadwal['jadwal_tgl_berangkat']) ?></td>
     		</tr>
     		<tr>
     			<td>Jam</td>
     			<td>:</td>
     			<td><?= $jadwal['jadwal_jam_berangkat'] ?></td>
     		</tr>
     		<tr>
     			<td>Harga (per tiket)</td>
     			<td>:</td>
     			<td><b>Rp. <?= rupiah($jadwal['tujuan_harga']) ?> ,- </b></td>
     		</tr>
     	</table>
        <div class="row mt-3">
            <div class="col-md-12">
                <button class="btn btn-success btn-sm" type="submit" name="submit">Lanjutkan</button>
            </div>
        </div>
     </div>
   </div>
   </form>
  
  </div> <!-- End Container -->
 </div> <!-- End Features -->