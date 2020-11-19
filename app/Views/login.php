
<?= $this->extend('templates/out') ?>
<?= $this->Section('content') ?>

<div class="col-9">
	<div class="container">
				<h3> Login </h3>
				<hr>
				<?php if (session()->get('sucess')): ?>
				<div class="alert alert-success" role="alert">
						<?= session()->get('sucess')?>
					</div>
				<?php endif; ?>
				<form class="" action="/" method="post">
					<div class="form-group">
					<label for="email"> Email address </label>
					<input type="email" class="form-control" name ="email" id="email" value="<?php set_value('email');?>">
					</div>
					<div class="form-group">
					<label for="password"> Password </label>
					<input type="password" class="form-control" name ="password" id="passwd" value="">
					</div>
					<?php if (isset($validation)): ?>
					<div class="col-12">
						<div class="alert alert-danger" role="alert">
							<?= $validation->listErrors(); ?>
						</div>
					</div>
					<?php endif; ?>
					<div class ="row">
						<button type="submit" class="btn btn-primary">Login </button>
					</div>

					<div class="col-12-sm-8 text-right">
						<a href="/register"> Dont' have accoutn yet?</a>
					</div>

					</div>
				</form>
				<h3> Certificate Verfication </h3>
				<hr>
				<?php if (session()->get('sucess')): ?>
				<div class="alert alert-success" role="alert">
						<?= session()->get('sucess')?>
					</div>
				<?php endif; ?>
				<form class="" action="/verifycertificate" method="post">
					<div class="form-group">
					<label for="certificateno"> Certificate Number </label>
					<input type="text" class="form-control" name ="certificateno" id="certificateno" value="<?php set_value('certificateno');?>">
					</div>

					<?php if (isset($validation)): ?>
					<div class="col-12">
						<div class="alert alert-danger" role="alert">
							<?= $validation->listErrors(); ?>
						</div>
					</div>
					<?php endif; ?>
					<div class ="row">
						<button type="submit" class="btn btn-primary">Certificate Verify </button>
					</div>



					</div>
				</form>
				<div>
						<h4>Student Registration </h4>
						<a href="">School Student Application</a>
						<a href="#">School Leaver Application </a>
				</div>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>
