<?php include './head.php'; ?>
<div class="container">
			<div class="row">
				<div class=" col-md-8  mx-auto"> <!--mx-auto agar ke tengah -->
					<div class="card">
						<div class="card-body">
							<h3>Data Dusun</h3>
							<p class="text-muted">Semua Data Dusun</p>
							<hr>
							<a href="dusun_tambah.php" class="btn btn-success text-white mb-2 btn-sm ">Tambah Dusun Baru</a>

								<table class="table table-bordered  table-hover table-saya">
									<thead><!--kalo menggunakan data table jquery dan css wajib menggunakan thead dan tbody dan kasih class/id bebas seperti table-saya -->
											<tr>
												<th width="1%">NO</th>
												<th>NAMA DUSUN</th>
												<th width="20%">OPSI</th>
											</tr>
									</thead>	


									<tbody>
											<?php 
											$no = 1;//untuk mengasih nilai variabel sama dengan satu
											$dusun = mysqli_query($koneksi,"SELECT * FROM dusun");//$koneksi disini wajib karena berhubungan dengan data base
											while ($d= mysqli_fetch_array($dusun)){//pembukaan perulangan 
													//fetch_array untuk menampilkan databse desa1 secara perulangan array

											?>
											<tr>
												<td>
													<?php echo $no++;//karena didalam perulangan artinya 1+1 terus menerus dan hanya memunculkan nomer ?>
														
												</td>
												<td>
													<?php echo $d['nama_dusun'];//output ?>
														
												</td>
												<td>
													<a href="dusun_ubah.php?id=<?php echo $d['id_dusun']; ?>" class="btn btn-warning text-white btn-sm"><!-- btn-sm artinya small bisa pake lg-->
													Edit
													</a>
													<a href="dusun_hapus.php?id=<?php echo $d['id_dusun']; ?>" class="btn btn-danger text-white btn-sm">
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