 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 <style>
 	.kursi{
 		width: 60px;height: 60px;border:1px solid black;margin-right: 20px;text-align: center;
 	}
 </style>
 <div id="features">
  <div class="container">
  
   <div class="sep-border"></div> <!-- Separator -->
  
   <div class="header">
    <h3>Pilih Tempat Duduk</h3>
    <!-- Button trigger modal -->
   
   </div>
   <div class="row">
   		<div class="col-md-2 text-right">
   			<span class="border border-success pl-2 pr-2 pb-3"><b>Supir</b></span>
   		</div>
   		<div class="col-md-10 border text-left">

			<div class="row text-left">
				<?php for($i = 1 ; $i<=10 ;$i++){?>
				
				<?php if ($this->Bus->cekKursiById($_GET['id_jadwal'],$i)==0){ ?>
					
				<a href="" class="kursi" data-href="<?= base_url() ?>beli" data-title="<?= $i ?>" data-toggle="modal" data-target="#confirm-delete">
					<b><?= $i; ?></b>
				</a>
				<?php }else{?>
				<a disabled class="kursi text-danger" onclick="return alert('Maaf kursi ini sudah di booking')"><b><?= $i ?></b></a>
				<?php } ?>


				<?php } ?>
				
				

			</div>
			<div class="row text-left">
				<?php for($i = 11 ; $i<=20;$i++){?>


				<?php if ($this->Bus->cekKursiById($_GET['id_jadwal'],$i)==0){ ?>	
				<a href="" class="kursi" data-href="<?= base_url() ?>beli" data-title="<?= $i ?>" data-toggle="modal" data-target="#confirm-delete">
					<b><?= $i; ?></b>
				</a>
				<?php }else{?>
				<a disabled class="kursi text-danger" onclick="return alert('Maaf kursi ini sudah di booking')"><b><?= $i ?></b></a>
				<?php } ?>			



				<?php } ?>
			</div>

			<div class="row mt-3 text-left">
				<?php for($i = 21 ; $i<=30 ;$i++){?>


				<?php if ($this->Bus->cekKursiById($_GET['id_jadwal'],$i)==0){ ?>
					
				<a href="" class="kursi" data-href="<?= base_url() ?>beli" data-title="<?= $i ?>" data-toggle="modal" data-target="#confirm-delete">
					<b><?= $i; ?></b>
				</a>
				<?php }else{?>
				<a disabled class="kursi text-danger" onclick="return alert('Maaf kursi ini sudah di booking')"><b><?= $i ?></b></a>
				<?php } ?>


				<?php } ?>
				
				

			</div>
			<div class="row text-left">
				<?php for($i = 31 ; $i<=40;$i++){?>


				<?php if ($this->Bus->cekKursiById($_GET['id_jadwal'],$i)==0){ ?>
					
				<a href="" class="kursi" data-href="<?= base_url() ?>beli" data-title="<?= $i ?>" data-toggle="modal" data-target="#confirm-delete">
					<b><?= $i; ?></b>
				</a>
				<?php }else{?>
				<a disabled class="kursi text-danger" onclick="return alert('Maaf kursi ini sudah di booking')"><b><?= $i ?></b></a>
				<?php } ?>
				<?php } ?>
			</div>
			

   		</div>
   </div>

   <div class="row ml-4 mt-2">
   	<div class="col-md-4 border ml-5 mt-4 mb-2">
   		Keterangan : <br>
   		<p><span class="text-primary"><b>Biru</b></span> : Kursi kosong</p>
   		<p><span class="text-danger"><b>Merah</b></span> : Kursi sudah berisi</p>
   	</div>
   </div>
  
  </div> <!-- End Container -->
 </div> <!-- End Features -->



<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Nomor Kursi : <b><input type="text" class="title" style="border: 0; width: 40px;" disabled=""></b>
            </div>
            <div class="modal-body">
                <form action="" class="form-ok" method="post">
				<div class="form-group">
					<label for="">Nama</label>
					<input type="text" class="form-control" name="tiket_nama">
				</div>
				<div class="form-group">
					<label for="">Nomor HP</label>
					<input type="text" class="form-control" name="tiket_nope">
				</div>
				<input type="hidden" value="<?= $_GET['id_jadwal'] ?>" name="tiket_jadwal">
				<input type="hidden" class="title" name="tiket_no_kursi">
				<div class="form-group">
					<label for="">Dari</label>
					<select name="tiket_dari" class="form-control" id="s_dari">
						<option>- Pilih -</option>


						<?php foreach ($tujuan_dari as $r): ?>
						 	<option><?= $r['tujuan_dari'] ?></option>
						<?php endforeach ?> 

					</select>
				</div>
				<div class="form-group">
					<label for="">Tujuan</label>
					<select class="form-control" id="s_tujuan">
						<?php if (count($jalur)>0){ ?>
						<option disabled selected>-Pilih Tujuan-</option>
						<?php foreach ($jalur as $v): ?>
							<option value="<?= $v['tujuan_lokasi'] ?>"><?= $v['tujuan_lokasi'] ?></option>
						<?php endforeach ?>
						<?php }else{ ?>
						<option disabled selected>Tidak ada jadwal</option>
						<?php } ?>	

					</select>
					<input type="hidden" id="tujuan-2" name="tiket_tujuan">
				</div>
				<div class="form-group">
					<label for="">Harga Tiket <b><span id="diskon"></span></b></label>
					<input type="text" class="form-control" id="harga" readonly name="tiket_total_bayar">
				</div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-default" name="submit">simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
                




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
				
				<script>
                    $('#confirm-delete').on('show.bs.modal', function(e) {
   					$(this).find('.form-ok').attr('action', $(e.relatedTarget).data('href'));
   					$(this).find('.title').attr('value', $(e.relatedTarget).data('title'));
					});
                </script>
                <script>
$(document).ready(function(){
	var root = window.location.origin+'/sibus/';


		
		$('#s_tujuan').change(function(){
		
		var id = $(this).val();
		var dari = $('#s_dari').val();
		var getUrl = root+ 'ajaxTujuan/'+id+'/'+dari;
		var html = '';
		$.ajax({
			url : getUrl,
			type : 'ajax',
			dataType : 'json',
			method: 'post',
			success : function(response){
				console.log(response);
				var total = response.tujuan_harga-(response.jadwal_markup/100*response.tujuan_harga);
				$('#harga').val(total);
				$('#tujuan-2').val(response.tujuan_id);
				$('#diskon').html('Diskon ('+response.jadwal_markup+') %');


			},
			error: function(response){
				console.log(response.status);
			}
		});

	});

});

                </script>
				