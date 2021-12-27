<?php include './head.php'; ?>
<!-- your content here -->

<div class="container">
			<div class="row">
				<div class=" col-md-12  mx-auto"> <!--mx-auto agar ke tengah -->
					<div class="card">
						<div class="card-body">
							<h3>Data Desa</h3>
							<p class="text-muted">Semua Data Desa</p>
							<hr>
							<a href="desa_tambah.php" class="btn btn-success text-white mb-2 btn-sm ">Tambah Desa Baru</a>

								<table class="table table-bordered  table-hover table-saya">
									<thead><!--kalo menggunakan data table jquery dan css wajib menggunakan thead dan tbody dan kasih class/id bebas seperti table-saya -->
											<tr>
												<th width="1%">NO</th>
												<th>NAMA DESA</th>
												<th width="20%">OPSI</th>
											</tr>
									</thead>	
									
									<tbody>
											<?php 
											$no = 1;//untuk mengasih nilai variabel sama dengan satu
											$desa = mysqli_query($koneksi,"SELECT * FROM desa");//$koneksi disini wajib karena berhubungan dengan data base
											while ($d= mysqli_fetch_array($desa)){//pembukaan perulangan 
													//fetch_array untuk menampilkan databse desa1 secara perulangan array

											?>
											<tr>
												<td>
													<?php echo $no++;//karena didalam perulangan artinya 1+1 terus menerus dan hanya memunculkan nomer ?>
														
												</td>
												<td>
													<?php echo $d['nama_desa'];//output ?>
														
												</td>
												<td>
													<a href="./desa_ubah.php?id=<?php echo $d['id_desa']; ?>" class="btn btn-warning text-white btn-sm"><!-- btn-sm artinya small bisa pake lg-->
													Edit
													</a>
													<a href="./desa_hapus.php?id=<?php echo $d['id_desa']; ?>" class="btn btn-danger text-white btn-sm">
													Hapus
													</a>
												</td>
											</tr>
											<?php 
													}//menutup perulangan
											?>
									</tbody>
								</table>
						</div>
					</div> 
				</div>
			</div>			
		</div>	

<?php include './footer.php'; ?>