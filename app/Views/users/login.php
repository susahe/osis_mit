
<?= $this->extend('templates/out') ?>
<?= $this->Section('content') ?>





					<?php if (session()->get('sucess')): ?>
						<div class="alert alert-success" role="alert">
								<?= session()->get('sucess')?>
						</div>
					<?php endif; ?>

						<form class="form-signin" action="/" method="post">
							<h5 class="h3 mb-3 font-weight-normal"> Login </h5>
							<hr>
								<div class="form-group">

									<input type="email" class="form-control" name ="email" id="email" value="<?php set_value('email');?>" placeholder="Login E-mail" required autofocus>
								</div>

								<div class="form-group">

									<input type="password" class="form-control " name ="password" id="passwd" value="" placeholder="Login Password" required>
								</div>
					<?php if (isset($validation)): ?>
						<div class="alert">
					   <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
					 	<?= $validation->listErrors(); ?>
					 </div>


					<?php endif; ?>

								<div class ="row">
									<div class="col-12">
										<button type="submit" class="btn btn-primary btn-block">Login </button>
									</div>
								</div>

							


						</form>





<?= $this->endSection() ?>
