<?php 
error_reporting(0) ?>
<div class="row">
	<div class="col-md-8">
		<form action="<?= base_url() ?>tiket" method="post">
			
		<div class="form-group">
			<label>Tanggal</label>
            <input type="date" class="form-control" name="tgl_tiket">
		</div>
	</div>
	
	<div class="col-md-4">
		<button type="submit" name="lihat" class="form-control btn btn-primary mt-6">Lihat</button>
	</div>
		</form>
</div>



<div class="row p-5">

	<div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                
                <button class="btn btn-success btn-sm float-right" onclick="printContent('print')">print</button>
            </div>
        </div>
        <hr>

<script>
function printContent(el){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(el).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
</script>


<div id="print">
<div class="row p-5">
    <div class="col-md-12">
        <h2>PO. Handoyo</h2>
        <h4>Telepon : (021) 8983 4339 Fax : (021) 88983 4340</h4>
        <h4>JL. Garuda Sakti KM.3</h4>
    </div>
</div>
    <hr style="border: 2px solid black; width: 96%; margin:0 auto;">
<div class="row p-5">
    <div class="col-md-12 text-center">
        <h2>REKAPITULASI TIKET</h2>
    </div>
<h2 class="float-left"> Tanggal : <?= date_indo($this->input->post('tgl_tiket')) ?></h2>
</div>
		<!-- Tables -->


                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px;">No</th>
                                                <th>Tiket Kode</th>
                                                <th>Atas Nama</th>
                                                <th>Tgl Berangkat</th>
                                                <th>Tujuan</th>
                                                <th class="text-right">Harga Tiket</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $no = 1;
                                                $total = 0;
                                                foreach ($tiket as $var): ?>
                                                    <tr>
                                                        <td><?= $no ?></td>
                                                        <td><?= $var['tiket_kode'] ?></td>
                                                        <td><?= $var['tiket_nama'] ?></td>
                                                        <td><?= date_indo($var['jadwal_tgl_berangkat']) ?></td>
                                                        <td><?= $var['tujuan_lokasi'] ?></td>
                                                        <td class="text-right">Rp. <?= rupiah($var['tiket_total_bayar']) ?> ,-</td>
                                                        <?php $total=$total+$var['tiket_total_bayar'] ?>
                                                    </tr>
                                                <?php 
                                                $no++;
                                                endforeach ?>
                                            
                                            </tbody>
                                            <tfoot>
                                                
                                                <tr>
                                                    <td colspan="5" class="text-center"><b>Total</b></td>
                                                    <td class="text-right"><b>Rp. <?= rupiah($total) ?> ,-</b></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="text-center"><b>Total Tiket</b></td>
                                                    <td class="text-right"><b><?= $no-1 ?> Tiket</b></td>
                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div>
                                    
                                    <!-- /tables -->
	</div>
</div>
</div>
</div>