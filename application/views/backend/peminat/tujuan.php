<div class="row">
	<div class="col-md-3">
		<form action="<?= base_url() ?>peminat/tujuan/harian" method="post">
			
		<div class="form-group">
			<label>Tanggal</label>
            <select name="tgl" required class="form-control">
                <option selected disabled>- Pilih Tanggal -</option>
                <?php for ($i = 1; $i <32 ; $i++) { ?>
                    <option><?= $i ?></option>
                <?php } ?>
            </select>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label>Pilih Bulan</label>
            <select name="bulan" required class="form-control">
                <option selected disabled>- Pilih Bulan -</option>
                <?php 
                $bulan = array("Januari","Februaru","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"); 
                 ?>
                <?php 
                for ($i =0; $i < count($bulan) ; $i++) { ?>
                    <option value="<?= $i+1 ?>"><?= $bulan[$i] ?></option>
                <?php } ?>
            </select>
		</div>
	</div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Pilih Tahun</label>
            <select name="tahun" required class="form-control">
                <option disabled selected>- Pilih Tahun - </option>
            <?php 
            $tahun = 2013; 
            for ($i = 0; $i < 10 ; $i++) { ?>
                <option><?= $tahun ?></option>
            <?php $tahun++; } ?>
            </select>
        </div>
    </div>
	<div class="col-md-2">
		<button type="submit" name="lihat" class="form-control btn btn-primary mt-6">Lihat</button>
		</form>
		
	</div>
</div>



<div class="row p-5">

	<div class="col-md-12">
        <h2> Tanggal : <?= date_indo($this->input->post('tahun').'-'.$this->input->post('bulan').'-'.$this->input->post('tgl')) ?> </h2>
		<!-- Tables -->


                                    <div class="table-responsive">
                                        <table  class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px;">No</th>
                                                <th>Tujuan</th>
                                                <th class="text-center">Peminat</th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach ($tujuan as $key => $val): ?>
                                                <?php 
                                                $peminat[$key] = $this->Tujuan->get_peminat_harian($this->input->post('tgl'),$this->input->post('bulan'),$this->input->post('tahun'),$val['tujuan_id']);
                                                 ?>
                                            <tr class="gradeX">
                                                <td style="width: 30px;"><?= $no ?></td>
                                                <td><?= $val['tujuan_lokasi'] ?></td>
                                                <td class="text-center"><?= count($peminat[$key]) ?></td>
                                                
                                               

                                            </tr>
                                            <?php $no++; endforeach ?>
                                            
                                            </tbody>
                                        </table>

                                    </div>
                                    
                                    <!-- /tables -->
	</div>
</div>
</div>