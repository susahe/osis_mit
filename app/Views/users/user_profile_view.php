<?= $this->include('templates/header.php') ?>


     <h3> <?= $user['firstname'].' '.$user['lastname']?> </h3>




				<?php if (session()->get('sucess')): ?>
				<div class="alert alert-success" role="alert">
						<?= session()->get('sucess')?>
					</div>
							<?php endif; ?>
				<hr>

				<form class="" action="/profile" method="post">
					<div class="row">

						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="firstname"> First Name</label>
								<input type="text" class="form-control" name ="firstname" id="firstname" value="<?= set_value('firstname',$user['firstname']);?>" placeholder="Enter your first Name">
							</div>
						</div>

						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="lastname"> Last Name </label>
								<input type="text" class="form-control" name ="lastname" id="lastname" value="<?= set_value('lastname',$user['lastname']);?>">
							</div>
						</div>

						<div class="col-6">
							<div class="form-group">
								<label for="email"> Email address </label>
								<input type="text" class="form-control" name ="email" readonly id="email" value="<?=$user['email'];?>">
							</div>
						</div>
            <div class="col-6">
              <div class="form-group">
                <label for="email"> Phone Number </label>
                <input type="text" class="form-control" name ="email" readonly id="email" value="<?=$user['email'];?>">
              </div>
            </div>
						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="password"> Password </label>
								<input type="password" class="form-control" name ="password" id="passwd" value="">
							</div>
						</div>

						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="password"> Confirm Password </label>
								<input type="password" class="form-control" name ="cpassword" id="cpasswd" value="">
							</div>
						</div>

						<div class="col-12">
							 <div class="form-group">
							    <label for="role" hidden >System Role</label>
							    <select class="form-control form-control-lg" id="role" name='role' hidden>
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
						<button type="submit" class="col-12 btn btn-primary">Update </button>
					</div>



				</form>
			</div>
</div>
		</div>
<?= $this->include('templates/footer.php') ?>
