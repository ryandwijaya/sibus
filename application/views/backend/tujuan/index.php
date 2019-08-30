<div class="row">
	<div class="col-md-12">
		
<div class="card border border-primary">

     <div class="card-header border-bottom border-primary">	         
     <h2 class="float-left">Data tujuan</h2>
     
     <button class="btn btn-primary float-right" data-toggle="modal" data-target="#vertical-modal"><i class="icon icon-plus"></i> Tambah tujuan</button>

     </div>                        

                 
     <div class="card-body">              
                                         
         <!-- Tables -->
                                    <div class="table-responsive">

                                        <table id="data-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px;">No</th>
                                                <th>Tujuan</th>
                                                <th>Harga Tiket</th>
                                                <th class="text-center">Peminat</th>
                                                
                                                <th class="text-center"><i class="icon icon-gears"></i></th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
											<?php 
											$no = 1;
											foreach ($tujuan as $key=> $val): ?>
                                                <?php 
                                                $peminat[$key] = $this->Pemesanan->get_peminat_tujuan($val['tujuan_id']);
                                                 ?>
                                            <tr class="gradeX">
                                                <td style="width: 30px;"><?= $no ?></td>
                                                <td><?= $val['tujuan_dari'] ?> - <?= $val['tujuan_lokasi'] ?></td>
                                                <td>Rp. <?= rupiah($val['tujuan_harga']) ?> ,-</td>
                                                <td class="text-center"><?= count($peminat[$key]) ?></td>
                                                <td class="text-center">
                                                	<a href="<?= base_url() ?>tujuan/edit/<?= $val['tujuan_id'] ?>" class="btn btn-warning btn-sm" title="Edit Data"><i class="icon icon-edit"></i></a>
                                                	<a href="<?= base_url() ?>tujuan/delete/<?= $val['tujuan_id'] ?>" class="btn btn-danger btn-sm" title="Hapus Data" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="icon icon-trash"></i></a>
                                                	
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
                 <h3 class="modal-title" id="model-3">Input Data tujuan</h3>
                 <button type="button" class="close" data-dismiss="modal"
                         aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
            <!-- /modal header -->

            <!-- Modal Body -->
             <div class="modal-body">
                 <form action="<?= base_url() ?>tujuan/create" method="post">
					       <div class="form-group">
                                <label for="">Dari</label>
                                <input type="text" class="form-control" name="tujuan_dari">
                            </div>
                            <div class="form-group">
                                <label for="">Tujuan</label>
                                <input type="text" class="form-control" name="tujuan_lokasi">
                            </div>
                            <div class="form-group">
                                <label for="">Harga Tiket</label>
                                <input type="number" class="form-control" name="tujuan_harga">
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
