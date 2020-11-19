<?= $this->extend('templates/out') ?>
<?= $this->Section('content') ?>

	<div class="row">
		<div class="col-12 cols-sm8 offset-sm2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
			<div class="container">
				<h3> Application  </h3>
				<hr>
				<form class="" action="/createstudent" method="post">
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
								<label for="certname"> Full Name </label>
								<input type="text" class="form-control" name ="certname" id="certname" value="<?= set_value('certname');?>" placeholder="Name Appleared in the Certificate mention here">
							</div>
						</div>

						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="birthdate"> Date of Birth</label>
								<input type="text" class="form-control" name ="dateofbirth" id="dateofbirth" value="<?= set_value('dateofbirth');?>" placeholder="Enter your Birthdate ">

							</div>
						</div>

						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="nic"> National Id Number</label>
								<input type="text" class="form-control" name ="nic" id="nic"  value="<?= set_value('nic');?>"  placeholder="National Id Number">
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
								<label for="hometel"> Home Telephone</label>
								<input type="text" class="form-control" name ="hometel" id="hometel" value="<?= set_value('hometel');?>" placeholder="Enter your Home Phone">
							</div>
						</div>

						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="mobile"> Mobile Phones </label>
								<input type="text" class="form-control" name ="mobile" id="mobile" value="<?= set_value('mobile');?>" placeholder="Enter your Mobile phone ">

							</div>
						</div>

												<div class="col-12">
													 <div class="form-group">
													    <label for="gender">Gender</label>
													    <select class="form-control form-control-lg" id="gender" name='gender'>
													      <option class="col-12">Male</option>
																<option class="col-12">Female</option>

													    </select>
													  </div>
												</div>

						<div class="col-12">
							 <div class="form-group">
							    <label for="role">System Role</label>
							    <select class="form-control form-control-lg" id="role" name='role'>
							      <option class="col-12">Student Students</option>
										<option class="col-12">Student Leavers</option>
							    </select>
							  </div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label for="pname"> Parent Name </label>
								<input type="text" class="form-control" name ="pname" id="pname" value="<?= set_value('pname');?>" placeholder="Enter Garian Name">
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
