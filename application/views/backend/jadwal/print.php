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
<div class="row p-5">
	<div class="col-md-12 text-center">
		<h2>LAPORAN JADWAL</h2>
	</div>
</div>
<div class="row ml-5">
	<div class="col-md-12">
		<?php $tgl = date("Y-m-d"); ?>
		<h4>Dicetak Pada : <?= date_indo($tgl) ?></h4>
	</div>
</div>

<div class="row p-5">

	<div class="col-md-12">
		<!-- Tables -->
                                    <div class="table-responsive">

                                        <table  class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px;">No</th>
                                                <th>Bus</th>
                                                <th>Tgl Berangkat</th>
                                                <th>Jam</th>
                                                <th>Markup</th>
                                                
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach ($jadwal as $val): ?>
                                            <tr class="gradeX">
                                                <td style="width: 30px;"><?= $no ?></td>
                                                <td><?= $val['bus_kode'] ?></td>
                                                <td><?= date_indo($val['jadwal_tgl_berangkat']) ?></td>
                                                <td><i class="fa fa-clock-o"></i> <?= $val['jadwal_jam_berangkat'] ?></td>
                                                <td> <?= $val['jadwal_markup'] ?>%</td>
                                                
                                                
                                               

                                            </tr>
											<?php $no++; endforeach ?>
                                            
                                            </tbody>
                                        </table>

                                    </div>
                                    <!-- /tables -->
	</div>
</div>
</div>