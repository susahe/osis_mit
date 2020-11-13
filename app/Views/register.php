<!Doctype>
<html>
<head>
<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>" />
<link rel="stylesheet" href="<?php echo base_url('css/login.css');?>" />
</head>
<style>

</style>
</head>
<body>
<div class="container">
	<?php
	  $uri = service('uri');

	 ?>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">MIT Computer Training Center</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>



	  <div class="collapse navbar-collapse" id="navbarNav">
	    <?php if (session()->get('isLogedIn')): ?>
	      <ul class="navbar-nav">
	        <li class="nav-item <?=($uri->getSegment(1)=='dashboard' ? 'active' : null )?>">
	          <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
	        </li>
	        <li class="nav-item <?=($uri->getSegment(1)=='profile' ? 'active' : null )?>"">
	          <a class="nav-link" href="/profile">Profile</a>
	        </li>
	      </ul>
	      <ul class="navbar-nav ml-auto">
	        <li class="nav-item ">
	          <a class="nav-link" href="/logout">Logout</a>
	        </li>
	      </ul>
	    <?php else:?>
	    <ul class="navbar-nav">

	      <li class="nav-item <?=($uri->getSegment(1)=='' ? 'active' :null )?>"">
	        <a class="nav-link" href="/">Login</a>
	      </li>
	      <li class="nav-item <?=($uri->getSegment(1)=='register' ? 'active' : null )?>"">
	        <a class="nav-link" href="/register">Register</a>
	      </li>
	    </ul>
	  <?php endif;?>
	  </div>
	</nav>
	<div class="row">
		<div class="col-12 cols-sm8 offset-sm2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
			<div class="container">
				<h3> Register </h3>
				<hr>
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
							<div class="col-12-sm-8 text-right">
								<a href="/"> Already have  account</a>
							</div>


				</form>
			</div>
		</div>
	</div>
</div>
