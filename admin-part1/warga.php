<?php include './head.php'; ?>
<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<h3>Data Warga</h3>
					<p class="text-muted">Semua Data Warga</p>
					<hr>
					<div class="row">
						<div class="col-md-12 mx-auto" >
							<div class="card bg-dark">
								<div class="card-body">
									<form  method="get" action="warga_filter.php" >
										<div class="form-group">
											<label>Filter Desa</label>
											<select name="desa" class="form-control bg-dark" required="required">
												<option value="">- Pilih -</option>
												<?php
													//desa sama dengan menampilkan semua data dari desa1 
													$desa = mysqli_query($koneksi,"SELECT * FROM  desa");
													while ($d=mysqli_fetch_array($desa)) {
												?>
												<!--semua data dari desa1 yg nilainnya id_desa1  ada beberapa desa-->
												<!--kemudian yg dipinta tampilkan nama_desa1 --> 
												<option  value="<?php echo $d['id_desa']; ?>"><?php echo $d['nama_desa']; ?></option>
												<?php } ?>
							
											</select>
										</div>
										<input type="submit" name="submit" value="Tampilkan Data" class="btn btn-success btn-dark">
									</form>
								</div>
							</div>
						</div>
					</div>

					<a href="warga_tambah.php" class="btn btn-success btn-sm mb-5">Tambah Warga</a>
					<a href="warga_cetak.php" class="btn btn-primary btn-sm mb-5 float-right" target="_blank">Cetak</a>
					<!--float-right agar button beara disamping kanan -->

					<table class="table table-bordered  table-hover table-saya">
						<thead><!--kalo menggunakan data table jquery dan css wajib menggunakan thead dan tbody dan kasih class/id bebas seperti table-saya -->
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>No.KTP</th>
									<th>JK</th>
									<th>Desa</th>
									<th>Dusun</th>
									<th>RT</th>
									<th>RW</th>
									<th>Status</th>
									<th>Pendidikan</th>
									<th>Agama</th>
									<th width="11%">Opsi</th>
								</tr>

						</thead>
					
											<tbody>
												
											<?php
											$no =1; 
											$warga = mysqli_query($koneksi,"SELECT * FROM warga,desa,dusun WHERE warga_desa=id_desa AND warga_dusun=id_dusun ORDER BY warga_id ASC");
											while ($w = mysqli_fetch_array($warga)) {
												
											?>
											<tr>
												<td ><?php echo $no++ ?></td>
												<td><?php echo $w['warga_nama']?></td>
												<td><?php echo $w['warga_ktp']?></td>
												<td><?php echo $w['warga_jk']?></td>
												<td><?php echo $w['nama_desa']?></td>
												<td><?php echo $w['nama_dusun']?></td>
												<td><?php echo $w['warga_rt']?></td>
												<td><?php echo $w['warga_rw']?></td>
												<td><?php echo $w['warga_status']?></td>
												<td><?php echo $w['warga_pendidikan']?></td>
												<td><?php echo $w['warga_agama']?></td>
												<td>
													<a href="warga_edit.php?id=<?php echo $w['warga_id'] ?>" class="btn btn-warning btn-sm text-white">Edit</a>
													<a href="warga_Hapus.php?id=<?php echo $w['warga_id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
												</td>
											</tr>
										<?php 
												}
										 ?>
										 </tbody>
										</table>
									</div>
								</div> 
							</div>	
<?php include './footer.php'; ?>                            