<div class="row">
	<div class="col-md-12">
		
<div class="card border border-primary">

     <div class="card-header border-bottom border-primary">	         
     <h2 class="float-left">Data Jadwal</h2>
     

     <a href="<?= base_url() ?>jadwal/print" class="btn btn-info float-right ml-3"><i class="icon icon-print"></i></a>
     <button class="btn btn-primary float-right" data-toggle="modal" data-target="#vertical-modal"><i class="icon icon-plus"></i> Tambah Jadwal</button>

     </div>                        

                 
     <div class="card-body">              
                                         
         <!-- Tables -->
                                    <div class="table-responsive">

                                        <table id="data-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px;">No</th>
                                                <th>Bus</th>
                                                <th>Tgl Berangkat</th>
                                                <th>Jam</th>
                                                <th>Markup</th>
                                                
                                                <th class="text-center"><i class="icon icon-gears"></i></th>
                                               
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
                                                
                                                <td class="text-center">
                                                	<a href="<?= base_url() ?>jadwal/edit/<?= $val['jadwal_id'] ?>" class="btn btn-warning btn-sm" title="Edit Data"><i class="icon icon-edit"></i></a>
                                                    <a href="<?= base_url() ?>surat_jalan/<?= $val['bus_id'] ?>/<?= $val['jadwal_tgl_berangkat'] ?>" class="btn btn-info btn-sm" title="surat jalan"><i class="icon icon-print"></i></a>
                                                	<a href="<?= base_url() ?>jadwal/delete/<?= $val['jadwal_id'] ?>" class="btn btn-danger btn-sm" title="Hapus Data" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="icon icon-trash"></i></a>
                                                	
                                                </td>
                                               

                                            </tr>
											<?php $no++; endforeach ?>
                                            
                                            </tbody>
                                        </table>

                                    </div>
                                    <!-- /tables -->
                                    
     </div>                                                        
</div>		



	</div>
</div>


<!-- Modal -->
 <div class="modal fade" id="vertical-modal" tabindex="-1" role="dialog"
      aria-labelledby="model-3" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">

         <!-- Modal Content -->
         <div class="modal-content">

             <!-- Modal Header -->
             <div class="modal-header">
                 <h3 class="modal-title" id="model-3">Input Data Jadwal</h3>
                 <button type="button" class="close" data-dismiss="modal"
                         aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
            <!-- /modal header -->

            <!-- Modal Body -->
             <div class="modal-body">
                 <form action="<?= base_url() ?>jadwal/create" method="post">
					
                            <!-- <div class="form-group">
                                <label for="">Tujuan</label>
                                <select name="jadwal_tujuan" class="form-control">
                                    <option>-Pilih Tujuan-</option>
                                    <?php foreach ($tujuan as $value): ?>
                                    <option value="<?= $value['tujuan_id'] ?>"><?= $value['tujuan_lokasi'] ?></option> 
                                    <?php endforeach ?>
                                </select>
                            </div> -->
                            <div class="form-group">
                                <label for="">Bus</label>
                                <select name="jadwal_bus" class="form-control">
                                    <option>-Pilih Bus-</option>
                                    <?php foreach ($bus as $value): ?>
                                    <option value="<?= $value['bus_id'] ?>"><?= $value['bus_kode'] ?></option> 
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tgl Berangkat</label>
                                <input type="date" class="form-control" name="jadwal_tgl_berangkat">
                            </div>
                            <div class="form-group">
                                <label for="">Jam Berangkat</label>
                                <input type="time" class="form-control" name="jadwal_jam_berangkat">
                            </div>
                            <div class="form-group">
                                <label for="">Mark Up</label>
                                <input type="number" class="form-control" name="jadwal_markup" step="0.01">
                            </div>

					
                 
             </div>
            <!-- /modal body -->

            <!-- Modal Footer -->
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary btn-sm"
                         data-dismiss="modal">Close
                 </button>
                 <button type="submit" name="submit" class="btn btn-primary btn-sm">Save
                 </button>
             </div>
             </form>
            <!-- /modal footer -->

         </div>
        <!-- /modal content -->

     </div>
 </div>
<!-- /modal -->
