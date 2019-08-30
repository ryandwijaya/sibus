<div class="row">
	<div class="col-md-12">
		
<div class="card border border-primary">

     <div class="card-header border-bottom border-primary">	         
     <h2 class="float-left">Data Pemesanan</h2>
     
     <a href="<?= base_url() ?>pemesanan/cetak" class="btn btn-info float-right ml-3"><i class="icon icon-print"></i></a>
     <button class="btn btn-primary float-right" data-toggle="modal" data-target="#vertical-modal"><i class="icon icon-plus"></i> Tambah Pemesanan</button>

     </div>                        

                 
     <div class="card-body">              
                                         
         <!-- Tables -->
                                    <div class="table-responsive">

                                        <table id="data-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px;">No</th>
                                                <th>Nama</th>
                                                <th>Kode Pemesanan</th>
                                                <th>Tujuan</th>
                                                <th>Tgl Berangkat</th>
                                                <th>Jam</th>
                                                <th>Nomor Kursi</th>
                                                <th>Total Bayar</th>
                                                
                                                <th class="text-center"><i class="icon icon-gears"></i></th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
											<?php 
											$no = 1;
											foreach ($pemesanan as $val): ?>
                                            <tr class="gradeX">
                                                <td style="width: 30px;"><?= $no ?></td>
                                                <td><?= $val['tiket_nama'] ?></td>
                                                <td><?= $val['tiket_kode'] ?></td>
                                                <td><?= $val['tujuan_lokasi'] ?></td>
                                                <td><?= date_indo($val['jadwal_tgl_berangkat']) ?></td>
                                                <td><?= $val['jadwal_jam_berangkat'] ?></td>
                                                <td><?= $val['tiket_no_kursi'] ?></td>
                                                <td>Rp. <?= rupiah($val['tiket_total_bayar']) ?></td>
                                                
                                                <td class="text-center">
                                                	<a href="<?= base_url() ?>pemesanan/delete/<?= $val['tiket_id'] ?>" class="btn btn-danger btn-sm" title="Hapus Data" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="icon icon-trash"></i></a>
                                                	
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
                 <h3 class="modal-title" id="model-3">Masukkan Data Pemesanan</h3>
                 <button type="button" class="close" data-dismiss="modal"
                         aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
            <!-- /modal header -->

            <!-- Modal Body -->
             <div class="modal-body">
                 
					<form action="" id="form-pemesanan" method="POST" target="_blank">
                            <div class="form-group">
                                <label for="">Tujuan</label>
                                <select name="tiket_tujuan" id="s_tujuan" class="form-control">
                                    <option>-Pilih Tujuan-</option>
                                    <?php foreach ($tujuan as $value): ?>
                                    <option value="<?= $value['tujuan_id'] ?>"><?= $value['tujuan_lokasi'] ?></option> 
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jadwal</label>
                                <select name="tiket_jadwal" id="s_jadwal" class="form-control">
                                    <option>-Pilih Jadwal-</option>
                                </select>
                            </div>
                           
                            					
                 
             </div>
            <!-- /modal body -->

            <!-- Modal Footer -->
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary btn-sm"
                         data-dismiss="modal">Close
                 </button>
                 <button type="submit"  class="btn btn-primary btn-sm">Save
                 </button>
             </form>
             </div>

            <!-- /modal footer -->

         </div>
        <!-- /modal content -->

     </div>
 </div>
<!-- /modal -->
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    var root = window.location.origin+'/sibus/';


        
        $('#s_tujuan').change(function(){
        var id = $(this).val();
        var getUrl = root+ 'ajax/jadwal/'+id;
        var html = '';
        $.ajax({
            url : getUrl,
            type : 'ajax',
            dataType : 'json',
            method: 'post',
            success : function(response){
                console.log(response);
                if (response.length>0) {
                html +='<option disable selected>-Pilih Jadwal-</option>';
                for (var i = 0; i < response.length; i++) {
                    html+= '<option value='+response[i].jadwal_id+'> TGL '+response[i].jadwal_tgl_berangkat+' , JAM'+ response[i].jadwal_jam_berangkat +'</option>';
                    
                }
            }else{
                html+='<option disable selected>Belum ada jadwal</option>';
            }
                console.log(html);
                $('#s_jadwal').html(html);


            },
            error: function(response){
                console.log(response.status);
            }
        });

        });

        $('#s_jadwal').change(function(){
        var id = $(this).val();
        var getUrl = root+ 'pemesanan/buy_admin?id_jadwal='+id;;
        $('#form-pemesanan').attr('action', getUrl);     
        });

});

                </script>