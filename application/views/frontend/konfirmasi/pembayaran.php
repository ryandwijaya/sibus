 <div id="features">
  <div class="container">
  
   <div class="sep-border"></div> <!-- Separator -->
  
   <div class="header">
    <h3>Konfirmasi Pemesanan Tiket <?= $tiket_kode ?></h3>
   <div class="row" style="justify-content: center;">
      <div class="col-md-8">
         <table class="table table-bordered">
            <tr>
               <td>Nama</td>
               <td>:</td>
               <td><?= $tiket['tiket_nama'] ?></td>
            </tr>
            <tr>
               <td>Jadwal</td>
               <td>:</td>
               <td><?= $tiket['jadwal_tgl_berangkat'] ?></td>
            </tr>
            <tr>
               <td>Nomor Kursi</td>
               <td>:</td>
               <td><?= $tiket['tiket_no_kursi'] ?></td>
            </tr>
            <tr>
               <td>Tujuan</td>
               <td>:</td>
               <td><?= $tiket['tujuan_lokasi'] ?></td>
            </tr>
            <tr>
               <td>Total Tagihan</td>
               <td>:</td>
               <td>Rp. <?= rupiah($tiket['tiket_total_bayar']) ?> ,-</td>
            </tr>
         </table>
         
      </div>
   </div>
   </div>
   <div class="row" style="justify-content: center;">
   	<div class="col-md-6">
   		<h3></h3>
   	</div>
   </div>
   <hr>
   <div class="row" style="justify-content: center;">
   	<div class="col-md-6">
   		
            <?= form_open('pembayaran/konfirmasi',array('enctype'=>'multipart/form-data')) ?>
            <input type="hidden" value="<?= $tiket['tiket_id'] ?>" name="konfirmasi_no_pemesanan">
            <div class="form-group">
               <label for="">Nama Pengirim Rekening</label>
               <input type="text" class="form-control" name="konfirmasi_pengirim" required >
            </div>
            <div class="form-group">
               <label for="">Nomor Rekening</label>
               <input type="text" class="form-control" name="konfirmasi_no_rek" required >
            </div>
            <div class="form-group">
               <label for="">Tanggal Kirim</label>
               <input type="date" class="form-control" name="konfirmasi_tgl_bayar"  required style="height: 40px;width: 100%;">
            </div>
            <div class="form-group">
               <label for="">Jumlah Bayar</label>
               <input type="number" class="form-control" name="konfirmasi_jml_bayar" required style="height: 40px;width: 100%;">
            </div>
            <div class="form-group">
               <label for="">Transfer Ke Rekening</label>
               <select name="konfirmasi_rekening" class="form-control" id="">
                  <option>BNI</option>
                  <option>BCA</option>
                  <option>Mandiri</option>
               </select>
            </div> 
            <div class="form-group">
               <label for="">Bukti</label>
               <input type="file" class="form-control" name="konfirmasi_bukti" style="height: 40px;width: 100%;">
            </div>

            <button type="submit" name="submit" class="btn btn-success float-right mb-3">Konfirmasi</button>    
         </form>
   	</div>
   </div>
   
  
  </div> <!-- End Container -->
 </div> <!-- End Features -->