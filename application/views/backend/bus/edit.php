<div class="row">
	<div class="col-md-12">
		<form action="<?= base_url() ?>bus/edit/<?= $bus['bus_id'] ?>" method="post">
					
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Nomor Polisi</label>
								<input type="text" class="form-control" name="bus_kode" value="<?= $bus['bus_kode'] ?>">
							</div>
							<div class="form-group">
								<label for="">Kelas</label>
								<select name="bus_kelas" class="form-control">
									<option value="<?= $bus['bus_kelas'] ?>"><?= $bus['bus_kelas'] ?></option>
                                    <option>Bussines</option>
                                    <option>Executive</option>
                                    <option>Super Executive</option>
                                </select>
							</div>
							<div class="form-group">
								<label for="">Jumlah Seat</label>
								<input type="text" class="form-control" name="bus_seat" value="<?= $bus['bus_seat'] ?>">
							</div>
							<button class="btn btn-success btn-sm float-right" type="submit" name="submit">Update</button>
							<a class="btn btn-light btn-sm mr-2 float-right" href="javascript:history.back()">Cancel</a>
						</div>


		</form>
	</div>
</div>