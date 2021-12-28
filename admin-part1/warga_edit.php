<?php 
 include 'head.php';
?>
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="card mb-5">
						<div class="card-body">
							<h3>Edit Warga</h3>
							<p class="text-muted">Edit Data Warga</p>
							<hr>
							<a href="warga.php" class="btn btn-success btn-sm mb-5">Kembali</a>
							<?php 
							$id = $_GET['id'];
							$warga = mysqli_query($koneksi,"SELECT * FROM warga WHERE warga_id='$id' ");
							while($w = mysqli_fetch_array($warga)){
							?>
							<form action="warga_update.php" method="post">
								<div class="form-group">
									<label>Nama</label>
									<input type="text" name="nama" class="form-control" required="required" value="<?php echo $w['warga_nama'] ?>">
									<input type="hidden" name="id" value="<?php echo $w['warga_id'] ?>">
								</div>
								<div class="form-group">
									<label>No.KTP</label>
									<input type="number" name="ktp" class="form-control" required="required" value="<?php echo $w['warga_ktp'] ?>">
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<select name="jk" class="form-control" required="required" >
										<option value="">- Pilih -</option>
										<option <?php if($w['warga_jk'] == 'Laki-laki' ){echo "selected='selected'";} ?> value="Laki-laki">Laki-laki</option>
										<option <?php if($w['warga_jk'] == 'Perempuan' ){echo "selected='selected'";} ?> value="Perempuan">Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label>Desa</label>
									<select name="desa" class="form-control" required="required">
										<?php
											$desa = mysqli_query($koneksi,"SELECT * FROM  desa");
											while ($d=mysqli_fetch_array($desa)) {
										?>
										<option value="">- Pilih -</option>
										<option <?php if ($w['warga_desa'] == $d['id_desa'] ) {echo "selected='selected' ";} ?> value="<?php echo $d['id_desa']; ?>"><?php echo $d['nama_desa']; ?></option>
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
										<option <?php if ($w['warga_dusun'] == $d['id_dusun'] ) {echo "selected='selected' ";} ?>value="<?php echo $d['id_dusun']; ?>"><?php echo $d['nama_dusun']; ?></option>
										<?php } ?>
										
									</select>
								</div>
								<div class="form-group">
									<label>RT</label>
									<input type="text" name="rt" class="form-control" required="required" value="<?php echo $w['warga_rt'] ?>" >
								</div>
								<div class="form-group">
									<label>RW</label>
									<input type="text" name="rw" class="form-control" required="required" value="<?php echo $w['warga_rw'] ?>">
								</div>
								<div class="form-group">
									<label>Status</label>
									<select name="status" class="form-control" required="required">
										<option value=""> - Pilih -</option>
										<option <?php if($w['warga_status']=='Kawin'){echo "selected='selected'";} ?> value="Kawin">Kawin</option>
										<option <?php if($w['warga_status']=='Belum Kawin'){echo "selected='selected'";} ?>value="Belum Kawin">Belum Kawin</option>
									</select>
								</div>
								<div class="form-group">
									<label>Pendidikan</label>
									<select name="pendidikan" class="form-control" required="required">
										<option  value=""> - Pilih -</option>
										<option <?php if($w['warga_pendidikan'] == 'SD' ){echo "selected='selected'";} ?> value="SD">SD</option>
										<option <?php if($w['warga_pendidikan'] == 'SMP' ){echo "selected='selected'";} ?> value="SMP">SMP</option>
										<option <?php if($w['warga_pendidikan'] == 'SMA' ){echo "selected='selected'";} ?> value="SMA">SMA</option>
										<option <?php if($w['warga_pendidikan'] == 'S' ){echo "selected='selected'";} ?> value="S">S</option>
										<option <?php if($w['warga_pendidikan'] == 'S2' ){echo "selected='selected'";} ?> value="S2">S2</option>
										<option <?php if($w['warga_pendidikan'] == 'S3' ){echo "selected='selected'";} ?> value="S3">S3</option>
									</select>
								</div>
								<div class="form-group">
									<label>Agama</label>
									<select name="agama" class="form-control" required="required">
										<option value=""> - Pilih -</option>
										<option <?php if($w['warga_agama']== 'Islam'){echo "selected='selected'";} ?> value="Islam">Islam</option>
										<option <?php if($w['warga_agama']== 'Kristen'){echo "selected='selected'";} ?> value="Kristen">Kristen</option>
										<option <?php if($w['warga_agama']== 'Hindu'){echo "selected='selected'";} ?> value="Hindu">Hindu </option>
										<option <?php if($w['warga_agama'] == 'Buddha'){echo "selected='selected'";} ?> value="Buddha">Buddha</option>
										<option <?php if($w['warga_agama'] == 'Kong Hu Chu'){echo "selected='selected'";} ?> value="Kong hu chu">Kong Hu Chu</option>
									</select>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" value="Simpan" class="btn btn-success btn-block">
								</div>
							</form>
						<?php } ?>
						</div>
					</div> 
				</div>
			</div>
		</div>	
<?php 
	include 'footer.php';
?>




