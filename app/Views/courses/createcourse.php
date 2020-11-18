<?= $this->extend('templates/main') ?>
<?= $this->Section('content') ?>

	<div class="row">
		<div class="col-12 cols-sm8 offset-sm2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
			<div class="container">
				<h3> Create Course </h3>
				<hr>
				<form class="" action="/createcourse" method="post">
					<div class="row">

						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="coursename"> Course Name</label>
								<input type="text" class="form-control" name ="coursename" id="coursename" value="<?= set_value('coursename');?>" placeholder="Enter  Course Name">
							</div>
						</div>

						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="coursefees"> Course Fees </label>
								<input type="text" class="form-control" name ="coursefees" id="coursefees" value="<?= set_value('coursefees');?>" placeholder="Enter Fees">

							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
								<label for="courseduration"> Course duration </label>
								<input type="text" class="form-control" name ="courseduration" id="email" value="<?= set_value('courseduration');?>" placeholder="Enter duration">
							</div>
						</div>



						<?php if (isset($validation)): ?>
						<div class="col-12">
							<div class="alert alert-danger" role="alert">
								<?= $validation->listErrors(); ?>
							</div>
						</div>
						<?php endif; ?>
					</div>
					<div class ="row">
						<button type="submit" class="col-12 btn btn-primary">Register </button>
					</div>
							<div class="col-12-sm-8 text-right">

							</div>


				</form>
			</div>
		</div>
<?= $this->endSection() ?>
