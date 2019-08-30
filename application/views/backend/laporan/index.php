<div class="row">
	<div class="col-md-5">
		<form action="<?= base_url() ?>admin/laporan" method="post">
			
		<div class="form-group">
			<label>Pilih Tanggal Dari</label>
			<input type="date" class="form-control" name="tgl_dari">
            <input type="hidden" name="tgl_dari1" value="<?= $this->input->post('tgl_dari') ?>">
		</div>
	</div>
	<div class="col-md-5">
		<div class="form-group">
			<label>Pilih Tanggal Sampai</label>
			<input type="date" class="form-control" name="tgl_sampai">
            <input type="hidden" name="tgl_sampai1" value="<?= $this->input->post('tgl_sampai') ?>">
		</div>
	</div>
	<div class="col-md-2">
		<button type="submit" name="lihat" class="btn btn-primary mt-6">Lihat</button>
        <button type="submit" name="export" class="btn btn-info mt-6">Export</button>
		</form>
		
	</div>
</div>


<div class="row p-5">

	<div class="col-md-12">
		<!-- Tables -->
                                    <div class="table-responsive">

                                        <table id="data-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px;">No</th>
                                                <th>Kode Tiket</th>
                                                <th>Nama</th>
                                                <th>Tujuan</th>
                                                <th>Nomor Rek</th>
                                                <th>Tgl Bayar</th>
                                                <th>Bayar Ke</th>
                                                
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
											<?php 
											$no = 1;
											foreach ($konfirmasi as $val): ?>
                                            <tr class="gradeX">
                                                <td style="width: 30px;"><?= $no ?></td>
                                                <td><?= $val['tiket_kode'] ?></td>
                                                <td><?= $val['tiket_nama'] ?></td>
                                                <td><?= $val['tujuan_lokasi'] ?></td>
                                                <td><?= $val['konfirmasi_no_rek'] ?></td>
                                                <td><?= date_indo($val['konfirmasi_tgl_bayar']) ?></td>
                                                <td><?= $val['konfirmasi_rekening'] ?></td>

                                            </tr>
											<?php $no++; endforeach ?>
                                            
                                            </tbody>
                                        </table>

                                    </div>
                                    <!-- /tables -->
	</div>
</div>
</div>