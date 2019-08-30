
  <div id="slider">
  <div class="container">
   <div class="row-fluid"  style="background-color: #ffffff52; border-radius: 10px;padding: 10px;">
 
    <div class="span8 content p-4">
     <h2 style="color: black;">PO HANDOYO</h2>
     <h3 style="color: black;">Hubungi Kami : +628 xxx xxxxx</h3>
     <h3 style="color: black;">Jalan Garuda Sakti Km. 3</h3>
     <div class="flexslider">
      <ul class="slides">
       <li class="flex-active-slide"><a href="#"><i class="icon-edit icon-white"></i> 4,500 Web Templates</a></li>
       <li><a href="#"><i class="icon-lock icon-white"></i> 99.9% Uptime Guarantee</a></li>
       <li><a href="#"><i class="icon-calendar icon-white"></i> Money Back Guarantee</a></li>
       <li><a href="#"><i class="icon-inbox icon-white"></i> 1-CLICK Script Installs</a></li>
      </ul>
     </div>
    </div> <!-- End Content -->
   
   </div> <!-- End Row-Fluid -->
  </div> <!-- End Container -->
 </div> <!-- End Slider -->

 <div id="features">
  <div class="container">
  
   <div class="sep-border"></div> <!-- Separator -->
  
   <div class="header">
    <h3>Jadwal Keberangkatan</h3>
   
   </div>
   
   <div class="row-fluid">
     <table id="example" class="table table-striped table-hover table-bordered">
       <thead>
         
       
       <tr>
         <th>Nomor Polisi</th>
         <th>Kelas</th>
         <th>Tanggal</th>
         <th>Jam</th>
         <th style="text-align: center;">Pilihan</th>
       </tr>
       </thead>
       <tbody>
       <?php foreach ($jadwal as $value): ?>
       <tr>
         <td><?= $value['bus_kode'] ?></td>
         <td><?= $value['bus_kelas'] ?></td>
         <td><?= date_indo($value['jadwal_tgl_berangkat']) ?></td>
         <td><?= $value['jadwal_jam_berangkat'] ?></td>
         <td style="text-align: center;"><a href="<?= base_url() ?>pemesanan/buy?id_jadwal=<?= $value['jadwal_id'] ?>" class="btn btn-info btn-sm">Pesan</a></td>
       </tr>
       <?php endforeach ?>
       </tbody>
     </table>
   </div>
  
  </div> <!-- End Container -->
 </div> <!-- End Features -->
 

 
 
 
 <div id="contact">
  <div class="container">
   
   <div class="sep-border"></div> <!-- Separator -->

   <div class="header">
    <h3>Informasi</h3>
    <p>Pembayaran Rekening</p>
   </div>
   
   <div class="row-fluid text-center" style="text-align: center;">
   
    <div class="span4 clearfix item">
        <div class="row-fluid">
          <img src="<?= base_url() ?>assets/images/mandiri.PNG" alt="no image">
        </div>
        <div class="row-fluid">
          <span>PO. Handoyo</span>
          <span>178 303 xxxx</span>
        </div>
    </div>
    <div class="span4 clearfix item">
        <div class="row-fluid">
          <img src="<?= base_url() ?>assets/images/bca.PNG" alt="no image">
        </div>
        <div class="row-fluid">
          <span>PO. Handoyo</span>
          <span>178 303 xxxx</span>
        </div>
    </div>
    <div class="span4 clearfix item">
        <div class="row-fluid">
          <img src="<?= base_url() ?>assets/images/bni.PNG" alt="no image">
        </div>
        <div class="row-fluid">
          <span>PO. Handoyo</span>
          <span>178 303 xxxx</span>
        </div>
    </div>
   
   </div> <!-- End Row-Fluid -->
  </div> <!-- End Container -->
 </div> <!-- End Contact -->