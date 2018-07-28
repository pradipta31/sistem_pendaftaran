<?php
	include 'atas.php';
?>
		<section id="content">
			<div class="container">

				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
						<form class="register-form" action="proses-login.php" method="post">
							<h2>Login <small>agar dapat melakukan tes online</small></h2>
							<br>
							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="4">
							</div>
							<div class="form-group">
								<input type="text" class="form-control input-lg" id="exampleInputPassword1" placeholder="Nomor Peserta" name="nomor_peserta">
							</div>
							<br>
							<div class="row">
								<div class="col-xs-12 col-md-6">
									<input type="submit" value="Login" class="btn btn-primary btn-block btn-lg" name="submit" tabindex="7">
								</div>
							</div>
						</form>
							<br><br><br>	<br>
					</div>
				</div>

			</div>
		</section>

<?php
	include 'bawah.php';
?>
