<?php 
	INCLUDE 'head.php';
?>


		<div class="container">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<div class="card">
						<div class="card-body">
							<h3>Ganti Password</h3>
							<p class="text-muted">Ganti Password Admin</p>
							<hr>
							<?php 
							if(isset($_GET['pesan'])){
								if($_GET['pesan']=='pasten'){
									echo "<div class='alert alert-success'>Password Telah Di Ganti</div>";
								}
							}

							?>

						
							<form action="ganti_password_aksi.php" method="post">
								<div class="form-group">
									<label>Masukan Password Baru</label>
									<input type="Password" name="Password" required="required" class="form-control mb-2">
									<!--from control untuk memenuhi kotak input -->
									<input type="submit" name="submit" value="simpan" class="btn btn-success btn-block">
									<!--btn-block untuk memenuhi kotal submit -->
								</div>
							</form>
						</div>
					</div> 
				</div>
			</div>
		</div>	


<?php 
	INCLUDE 'footer.php';
?>




