<?php 
	include 'head.php';
?>
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="card mb-5">
						<div class="card-body">
							<h3>Tambah Warga</h3>
							<p class="text-muted">Tambah Data Warga</p>
							<hr>
							<a href="warga.php" class="btn btn-success btn-sm mb-5">Kembali</a>

							<form action="warga_tambah_aksi.php" method="post">
								<div class="form-group">
									<label>Nama</label>
									<input type="text" name="nama" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>No.KTP</label>
									<input type="number" name="ktp" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<select name="jk" class="form-control" required="required">
										<option value="">- Pilih -</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label>Desa</label>
									<select name="desa" class="form-control" required="required">
										<option value="">- Pilih -</option>
										<?php
											$desa = mysqli_query($koneksi,"SELECT * FROM  desa");
											while ($d=mysqli_fetch_array($desa)) {
										?>
										<option value="<?php echo $d['id_desa']; ?>"><?php echo $d['nama_desa']; ?></option>
										<?php } ?>
										
									</select>
								</div>
								<div class="form-group">
									<label>Dusun</label>
									<select name="dusun" class="form-control" required="required">
										<option value="">- Pilih -</option>
										<?php
											$dusun = mysqli_query($koneksi,"SELECT * FROM  dusun");
											while ($d=mysqli_fetch_array($dusun)) {
										?>
										<option value="<?php echo $d['id_dusun']; ?>"><?php echo $d['nama_dusun']; ?></option>
										<?php } ?>
										
									</select>
								</div>
								<div class="form-group">
									<label>RT</label>
									<input type="text" name="rt" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>RW</label>
									<input type="text" name="rw" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Status</label>
									<select name="status" class="form-control">
										<option value=""> - Pilih -</option>
										<option value="Kawin">Kawin</option>
										<option value="Belum Kawin">Belum Kawin</option>
									</select>
								</div>
								<div class="form-group">
									<label>Pendidikan</label>
									<select name="pendidikan" class="form-control">
										<option value=""> - Pilih -</option>
										<option value="SD">SD</option>
										<option value="SMP">SMP</option>
										<option value="SMA">SMA</option>
										<option value="S2">S2</option>
										<option value="S3">S3</option>
									</select>
								</div>
								<div class="form-group">
									<label>Agama</label>
									<select name="agama" class="form-control">
										<option value=""> - Pilih -</option>
										<option value="Islam">Islam</option>
										<option value="Kristen">Kristen</option>
										<option value="Hindu">Hindu</option>
										<option value="Buddha">Buddha</option>
										<option value="Kong hu chu">Kong Hu Chu</option>
									</select>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" value="Simpan" class="btn btn-success btn-block">
								</div>
							</form>
						</div>
					</div> 
				</div>
			</div>
		</div>	
<?php
	include 'footer.php';
?>




