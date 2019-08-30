<?php 
error_reporting(0);
 ?>
<div class="row">
	<div class="col-md-12">
		<button class="btn btn-success btn-sm float-right" onclick="printContent('print')">Cetak</button>
	</div>
</div>
<script>
function printContent(el){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(el).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
</script>


<hr>
<div id="print" class="p-5">
<div class="row p-5">
    <div class="col-md-12">
        <h2>PO. Handoyo</h2>
        <h4>Telepon : (021) 8983 4339 Fax : (021) 88983 4340</h4>
        <h4>JL. Garuda Sakti KM.3</h4>
    </div>
</div>
    <hr style="border: 2px solid black; width: 96%; margin:0 auto;">



    <h2 class="mt-4" style="text-align: center;">SURAT JALAN</h2>

<div class="row ml-2 mr-2">
<div class="col-md-4">Nomor Polisi : <?= $jadwal[0]['bus_kode'] ?></div>
<div class="col-md-4"></div>
<div class="col-md-4 text-right">Tanggal : <?= date_indo($jadwal[0]['jadwal_tgl_berangkat']) ?> </div>
</div>

<div class="row p-5">
	<div class="col-md-12">
		<!-- Tables -->
                                    <div class="table-responsive">

                                        <table  class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px;">No</th>
                                                <th>Nama</th>
                                                <th>Tujuan</th>
                                                <th class="text-center">Ongkos</th>
                                                
                                               
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <?php 
                                            $no = 1;
                                            $total_harga = 0;
                                            foreach ($jadwal as $r => $val): ?>
                                            
                                            <tr class="gradeX">
                                                <td style="width: 30px;"><?= $no ?></td>
                                                <td><?= $val['tiket_nama'] ?></td>
                                                <td><?= $val['tujuan_lokasi'] ?></td>
                                                <td class="text-center">Rp. <?= rupiah($val['tiket_total_bayar']) ?> ,-</td>
                                                
                                                
                                               

                                            </tr>
											<?php $total_harga=$total_harga+$val['tiket_total_bayar'];$no++; endforeach ?>
                                            
                                            </tbody>
                                            <tfoot>
                                                <td class="text-center" colspan="3">Jumlah</td>
                                                <td class="text-center text-success"><b>Rp. <?= rupiah($total_harga) ?> ,-</b></td>
                                            </tfoot>
                                        </table>

                                    </div>
                                    <!-- /tables -->
	</div>
</div>

<div class="row p-5">
    <div class="col-md-12 text-right">
        <h5 class="mr-5">Pekanbaru , .......................................</h5>
    </div>
    
</div>
<div class="row p-5">
    <div class="col-md-4 text-center">
        <h5>Tanda Tangan Pengemudi</h5>
        <br><br><br>
        <p>(............................................)</p>
    </div>
    <div class="col-md-4 text-center">
        <h5>Pegawai</h5>
        <br><br><br>
        <p>(.......................................)</p>
    </div>
    <div class="col-md-4 text-center">
        <h5>Petugas</h5>
        <br><br><br>
        <p>(.......................................)</p>
    </div>
</div>
</div>