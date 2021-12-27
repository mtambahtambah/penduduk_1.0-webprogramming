<?php include './head.php'; ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12 mx-auto">
					<div class="card">
						<div class="card-body">
							<h3>Tambah Desa</h3>
							<p class="text-muted">Tambah Desa Baru</p>
							<hr>
							<form action="desa_tambah_aksi.php" method="post">
								<div class="form-group">
									<label>Nama Desa</label>
									<input type="text" name="nama" required="required" class="form-control mb-2">
									<!--from control untuk memenuhi kotak input -->
									<input type="submit" name="submit" value="simpan" class="btn btn-success  btn-block">
									<!--btn-block untuk memenuhi kotal submit -->
								</div>
							</form>
						</div>
					</div> 
				</div>
			</div>
		</div>	
<?php include './footer.php'; ?>        