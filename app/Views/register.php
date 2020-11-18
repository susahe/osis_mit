<?= $this->extend('templates/main') ?>
<?= $this->Section('content') ?>

<div role="main" class="col-md ml-sm-auto col-lg-10 pt-3 px-4">

	<div class="d-flex justify-cotnet-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

				<form class="" action="/register" method="post">
					<div class="row">

						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="firstname"> First Name</label>
								<input type="text" class="form-control" name ="firstname" id="firstname" value="<?= set_value('firstname');?>" placeholder="Enter your first Name">
							</div>
						</div>

						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="lastname"> Last Name </label>
								<input type="text" class="form-control" name ="lastname" id="lastname" value="<?= set_value('lastname');?>" placeholder="Enter your Last Name">

							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
								<label for="email"> Email address </label>
								<input type="text" class="form-control" name ="email" id="email" value="<?= set_value('email');?>" placeholder="Enter your Email">
							</div>
						</div>

						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="password"> Password </label>
								<input type="password" class="form-control" name ="password" id="passwd" value="" placeholder="Enter Password ">
							</div>
						</div>

						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="password"> Confirm Password </label>
								<input type="password" class="form-control" name ="cpassword" id="cpasswd" value="" placeholder="Confirm Passwordnhj">
							</div>
						</div>

						<div class="col-12">
							 <div class="form-group">
							    <label for="role">System Role</label>
							    <select class="form-control form-control-lg" id="role" name='role'>
							      <option class="col-12">Student</option>
							      <option>Teacher</option>
							      <option>Parent</option>
							      <option>Staff</option>
							      <option>Admin</option>
							    </select>
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
							


				</form>
			</div>
		</div>
<?= $this->endSection() ?>
