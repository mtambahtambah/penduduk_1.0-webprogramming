<?php include './head.php'; ?>
					<h3 class="display-6 text-center mb-4 mt-4">Cetak Data Warga</h3>

					<table class="table table-bordered table-striped table-hover table-saya">
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
											</tr>
										<?php 
												}
										 ?>
						 </tbody>
					</table>
<script type="text/javascript">
  window.print();//untuk ngefrint
</script>
<?php include './footer.php'; ?>						
						

						
