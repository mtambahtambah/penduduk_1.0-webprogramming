<?php include './head.php'; ?>
<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="card">
						<div class="card-body">
							<h3>Edit Desa</h3>
							<p class="text-muted">Edit Desa Baru</p>
							<hr>
							<form action="desa_ubah_aksi.php" method="post">

								<?php 
								$id = $_GET['id'];
								$data = mysqli_query($koneksi,"SELECT * FROM desa WHERE id_desa=('$id') ");//wajib $koneksi karena berhubungan database
								while($d = mysqli_fetch_array($data)){
								?>
								<div class="form-group">
									<label>Nama Desa</label>
									<input type="text" name="nama" required="required" value="<?php echo $d['nama_desa']; ?>" class="form-control mb-2">
									<input type="hidden" name="id" value="<?php  echo $d['id_desa'];?>" class="form-control">
									<!--hidden biar disembunyikan-->
								<?php
									 }
								 ?>
									
								</div>
								<input type="submit" name="submit" value="simpan" class="btn btn-success btn-block">
									
							</form>

						</div>
					</div> 
				</div>
			</div>
		</div>	
<?php include './footer.php'; ?>        