<div class="row">
	<div class="col-md-12">
		<form action="<?= base_url() ?>tujuan/edit/<?= $tujuan['tujuan_id'] ?>" method="post">
					
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Tujuan</label>
								<input type="text" class="form-control" name="tujuan_lokasi" value="<?= $tujuan['tujuan_lokasi'] ?>">
							</div>
							
							<div class="form-group">
								<label for="">Tujuan Harga</label>
								<input type="number" class="form-control" name="tujuan_harga" value="<?= $tujuan['tujuan_harga'] ?>">
							</div>
							<button class="btn btn-success btn-sm float-right" type="submit" name="submit">Update</button>
							<a class="btn btn-light btn-sm mr-2 float-right" href="javascript:history.back()">Cancel</a>
						</div>

		</form>
	</div>
</div>