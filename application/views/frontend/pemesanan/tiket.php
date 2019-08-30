 <div id="features">
  <div class="container">
  



   <div class="sep-border"></div> <!-- Separator -->
  
   <div class="header">
    <button class="btn btn-success" onclick="printContent('print')"><i class="zmdi zmdi-print"></i> Cetak</button>
<script>
function printContent(el){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(el).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
</script>
   
   </div>
   <div id="print" class="border p-4 page" style="color: blue;">
    


    <div class="p-5 mb-5">
  <div class="row p-2" >
    <div class="col-md-2">
        <img src="<?= base_url() ?>assets/logo_tiket.jpg" width="130" height="130">
    </div>
    <div class="col-md-8">
      <h3>TIKET BUS PO. HANDOYO</h3>
      <h6>Kantor Pusat : JL. Raya Solo - Boyolali KM.15 Bangak Telp: (0271) 782621</h6>
      <h6>Perwakilan : JL. Arengka II HP. 0813 6555 3098</h6>
    </div>
    <div class="col-md-2">
      <h6>NOMOR KURSI</h6>
      <h1><?= $tiket['tiket_no_kursi'] ?></h1>
    </div>
  </div>
  <hr style="border: 2px solid black;">
   <div class="row p-3 mt-2" style="justify-content: center;">
   	
    <div class="col-md-12">
      <table class="table">
        <tr>
          <td>Nama: </td>
          <td>:</td>
          <td><?= $tiket['tiket_nama'] ?></td>
        </tr>
        <tr>
          <td>Tujuan</td>
          <td>:</td>
          <td><?= $tiket['tujuan_lokasi'] ?></td>
        </tr>
        <tr>
          <td>Tgl Berangkat</td>
          <td>:</td>
          <td><?= date_indo($tiket['jadwal_tgl_berangkat']) ?> , Jam : <?= $tiket['jadwal_jam_berangkat'] ?></td>
        </tr>
        <tr>
          <td>Nomor Bus</td>
          <td>:</td>
          <td><?= $tiket['bus_kode'] ?></td>
        </tr>
      </table>
    </div>
	     
   </div>
    
    <div class="row ml-3 mt-4 border">
      <div class="col-md-4" style="text-align: center;border-right:1px solid grey;">
        <h2>MELAYANI TIKET </h2>
        <h2>SUMATERA - JAWA</h2>
      </div>
      <div class="col-md-8 ">
        <h6>NB: TELAH TERMASUK ASURANSI PENUMPANG PT. JASAS RAHARARJA UU NO.33/1954</h6>
      </div>
    </div>



   </div>
   <hr style="border: 1px dashed black;">
   </div>

 
   
   
  
 
  </div> <!-- End Container -->
 </div> <!-- End Features -->


