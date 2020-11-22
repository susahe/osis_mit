
<?= $this->extend('/templates/out') ?>
<?= $this->Section('content') ?>
<div class="container">
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
</div>
<?= $this->endSection() ?>
