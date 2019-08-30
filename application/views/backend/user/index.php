<div class="row">
	<div class="col-md-12">
		
<div class="card border border-primary">

     <div class="card-header border-bottom border-primary">	         
     <h2 class="float-left">Data User</h2>
     <button class="btn btn-primary float-right" data-toggle="modal" data-target="#vertical-modal"><i class="icon icon-plus"></i> Tambah User</button>
     </div>                        

                 
     <div class="card-body">              
                                         
         <!-- Tables -->
                                    <div class="table-responsive">

                                        <table id="data-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px;">No</th>
                                                <th>Nama User</th>
                                                <th>Username</th>
                                                <th>Level</th>
                                                <th class="text-center"><i class="icon icon-gears"></i></th>
                                            </tr>
                                            </thead>
                                            <tbody>
											<?php 
											$no = 1;
											foreach ($user as $val): ?>
                                            <tr class="gradeX">
                                                <td style="width: 30px;"><?= $no ?></td>
                                                <td><?= $val['user_nama'] ?></td>
                                                <td><?= $val['user_username'] ?></td>
                                                <td><?= $val['user_level'] ?></td>
                                                
                                                
                                                <td class="text-center">
                                                	
                                                	<a href="<?= base_url() ?>user/delete/<?= $val['user_id'] ?>" class="btn btn-danger btn-sm" title="Hapus Data" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="icon icon-trash"></i></a>
                                                	
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
                 <h3 class="modal-title" id="model-3">Input Data User</h3>
                 <button type="button" class="close" data-dismiss="modal"
                         aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
            <!-- /modal header -->

            <!-- Modal Body -->
             <div class="modal-body">
				<?php echo form_open_multipart('user/create');?>	

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="user_username">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama User</label>
                                <input type="text" class="form-control" name="user_nama">
                            </div>
                        </div>

						<div class="col-md-12">
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" class="form-control" name="user_password">
							</div>
						</div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Level</label>
                                <select name="user_level" class="form-control">
                                    <option disabled selected>-Pilih level user-</option>
                                    <option>admin</option>
                                    <option>supervisor</option>
                                    <option>pimpinan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" name="userfile2" class="form-control">
                                </div>
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
