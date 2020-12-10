<div class="row">
	<div class="col-12 cols-sm8 offset-sm2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
		<div class="container">
			<h3> Application  </h3>
				<form class="" action="/register_student" method="post">
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
								<input type="password" class="form-control" name ="cpassword" id="cpasswd" value="" placeholder="Confirm Password">
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

									<input type="hidden" name="role" value="Student">

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
