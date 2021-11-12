<?= $this->extend('home/dashboard') ?>
<?= $this->Section('content') ?>

<div class="row">

		<div class="container">
			<h3> Create Course  </h3>
				<form class="" action="/create_course" method="post">
					<div class="row">

						<div class="col-12 col-sm-12">
							<div class="form-group">
									<input type="text" class="form-control" name ="csname" id="courseName" value="<?= set_value('csname');?>" placeholder="Enter course name">
							</div>
						</div>
						<div class="col-12 col-sm-3">
							<div class="form-group">
									<input type="text" class="form-control" name ="cscode" id="cscode" value="<?= set_value('cscode');?>" placeholder="Enter course code">
							</div>
						</div>

						<div class="col-12 col-sm-3">
							<div class="form-group">

								<input type="text" class="form-control" name ="cstheryhrs" id="cstheryhrs" value="<?= set_value('cstheryhrs');?>" placeholder="Theory Hours for the Coruse">

							</div>
						</div>

						<div class="col-6 col-sm-3">
							<div class="form-group">

								<input type="text" class="form-control" name ="cspracthrs" id="cspracthrs" value="<?= set_value('cspracthrs');?>" placeholder="Practical Hourse for the Course">
							</div>
						</div>



						<div class="col-12 col-sm-3">
							<div class="form-group">

								<input type="text" class="form-control" name ="csprojecthrs" id="csprojecthrs" value="<?= set_value('csprojecthrs');?>" placeholder="Enter Project Hours ">
							</div>
						</div>

						<div class="col-12 col-sm-6">
							<div class="form-group">

								<input type="text" class="form-control" name ="csfees" id="csfees" value="<?= set_value('csfees');?>" placeholder="Enter Course Fees ">
							</div>
						</div>


					<div class="col-12 col-sm-6">
								<div class="form-group">
										<input type="text" class="form-control" name ="csperyear" id="csperyear" value="<?= set_value('csperyear');?>" placeholder="Enter Course Per Year ">
								</div>
					</div>

					<div class="col-12 col-sm-6">
								<div class="form-group">
										<input type="text" class="form-control" name ="csduemonths" id="csduemonths" value="<?= set_value('csduemonths');?>" placeholder="Enter Course per Months ">
								</div>
					</div>


						<div class="col-12">
							 <div class="form-group">
								 <select name="cstype">
								            <option value="1">School Students</option>
								            <option value="2">School Leavers</option>

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
						<button type="submit" class="col-3 btn btn-primary">Register </button>
					</div>
				</form>
</div>
 <a href#> Help </a> <a href="#>privacy Terms
</div>



<?= $this->endSection() ?>
