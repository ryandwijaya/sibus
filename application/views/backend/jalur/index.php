<div class="row">
	<div class="col-md-12">
		
<div class="card border border-primary">

     <div class="card-header border-bottom border-primary">	         
     <h2 class="float-left">Data Jalur</h2>
     
     <button class="btn btn-primary float-right" data-toggle="modal" data-target="#vertical-modal"><i class="icon icon-plus"></i> Tambah Jalur</button>

     </div>                        

                 
     <div class="card-body">              
                                         
         <!-- Tables -->
                                    <div class="table-responsive">

                                        <table id="data-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px;">No</th>
                                                <th>Nomor Polisi</th>
                                                <th>Jadwal</th>
                                                <th>Tujuan</th>
                                                <th class="text-center"><i class="icon icon-gears"></i></th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
											<?php 
											$no = 1;
											foreach ($jalur as $val): ?>
                                            <tr class="gradeX">
                                                <td style="width: 30px;"><?= $no ?></td>
                                                <td><?= $val['bus_kode'] ?></td>
                                                <td><?= date_indo($val['jadwal_tgl_berangkat']) ?> , Jam : <?= $val['jadwal_jam_berangkat'] ?></td>
                                                <td><?= $val['tujuan_dari'] ?> - <?= $val['tujuan_lokasi'] ?></td>
                                                
                                                <td class="text-center">
                                                	<!-- <a href="<?= base_url() ?>tujuan/edit/<?= $val['tujuan_id'] ?>" class="btn btn-warning btn-sm" title="Edit Data"><i class="icon icon-edit"></i></a> -->
                                                	<a href="<?= base_url() ?>jalur/delete/<?= $val['jalur_id'] ?>" class="btn btn-danger btn-sm" title="Hapus Data" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="icon icon-trash"></i></a>
                                                	
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
                 <h3 class="modal-title" id="model-3">Input Jalur</h3>
                 <button type="button" class="close" data-dismiss="modal"
                         aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
            <!-- /modal header -->

            <!-- Modal Body -->
             <div class="modal-body">
                 <form action="<?= base_url() ?>jalur/create" method="post">
					
                            <div class="form-group">
                                <label for="">Pilih Jadwal</label>
                                <select name="jalur_jadwal" id="" class="form-control" required>
                                    <option disabled selected>-Pilih Jadwal-</option>
                                    <?php foreach ($jadwal as $var): ?>
                                        <option value="<?= $var['jadwal_id'] ?>"> <?= $var['bus_kode'] ?> - <?= $var['jadwal_tgl_berangkat'] ?> jam : <?= $var['jadwal_jam_berangkat'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Pilih Tujuan</label>
                                <select name="jalur_tujuan" id="" class="form-control">
                                    <option disabled selected>-Pilih Tujuan-</option>
                                    <?php foreach ($tujuan as $v): ?>
                                        <option value="<?= $v['tujuan_id'] ?>"><?= $v['tujuan_dari'] ?> - <?= $v['tujuan_lokasi'] ?></option>
                                    <?php endforeach ?>
                                </select>
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
