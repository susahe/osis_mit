
<?= $this->extend('/templates/out') ?>
<?= $this->Section('content') ?>
<div class="row">
	<div class="col-12 cols-sm8 offset-sm2 col-md-6 offset-md-3 mt-5 pt-3 pb3 bg-white from-wrapper">
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
	</div>
</div>
<?= $this->endSection() ?>
