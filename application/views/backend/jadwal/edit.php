<div class="row">
	<div class="col-md-12">
		<form action="<?= base_url() ?>jadwal/edit/<?= $jadwal['jadwal_id'] ?>" method="post">
					
						<div class="col-md-12">
							
							<div class="form-group">
								<label for="">Bus</label>
								<select name="jadwal_bus" class="form-control">
									<option value="<?= $jadwal['jadwal_bus'] ?>"><?= $jadwal['jadwal_bus'] ?></option>
                                    <option>Executive</option>
                                    <option>Super Executive</option>
                                </select>
							</div>
							<div class="form-group">
								<label for="">Tanggal Berangkat</label>
								<input type="date" class="form-control" name="jadwal_tgl_berangkat" value="<?= $jadwal['jadwal_tgl_berangkat'] ?>">
							</div>
							<div class="form-group">
								<label for="">Jam Berangkat</label>
								<input type="time" class="form-control" name="jadwal_jam_berangkat" value="<?= $jadwal['jadwal_jam_berangkat'] ?>">
							</div>
							<div class="form-group">
								<label for="">Markup</label>
								<input type="text" class="form-control" name="jadwal_markup" value="<?= $jadwal['jadwal_markup'] ?>">
							</div>
							<button class="btn btn-success btn-sm float-right" type="submit" name="submit">Update</button>
							<a class="btn btn-light btn-sm mr-2 float-right" href="javascript:history.back()">Cancel</a>
						</div>


		</form>
	</div>
</div>