 <div id="features">
  <div class="container">
  
   <div class="sep-border"></div> <!-- Separator -->
  
   <div class="header">
    <h3>Pemesanan Berhasil</h3>
   
   </div>
   <div class="row" style="justify-content: center;">
   	
	<h4>Pemesanan berhasil dengan kode pemesanan adalah : <span style="color: green;"><?= $kode_pemesanan ?></span></h4><br>
  <h4 class="text-danger">Catatlah Nomor Pemesanan untuk melakukan Konfirmasi Pembayaran</h4>
   </div>

   <div class="row" style="justify-content: center;">
     <p>
       Silahkan Transfer ke salah satu rekening berikut dalam waktu 1x5 jam

     </p>
      <p>
        Pembayaran lebih dari 5 Jam Tiket akan Batal secara Otomatis
      </p>
   </div>
   <div class="row" style="justify-content: center;">
     <a href="<?= base_url() ?>konfirmasi"><button class="btn btn-success">Cek Konfirmasi Pembayaran</button></a>
   </div>
   
   
  
 
  </div> <!-- End Container -->
 </div> <!-- End Features -->


