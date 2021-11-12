<?= $this->extend('home/dashboard') ?>
<?= $this->Section('content') ?>

<div class="row">
	<div class="">
		<div class="container">

			<h3> Create a Teacher </h3>
							<hr><br/>
				<form class="" action="/create_student" method="post">
					<div class="row">

						<div class="col-12 col-sm-12">
							<div class="form-group">
									<label for="address">Address</label>
									<input type="text" class="form-control" name ="address" id="firstname" value="<?= set_value('firstname');?>" placeholder="Address">
									<small> Enter your first name here </small>
							</div>
						</div>
						<fieldset>
	 					<legend>Days and Times That your can follows Course</legend>



<script>
	function changeLevel(){
		var l = "/set_days/";
	  var level;
	  if(document.getElementById("day").value == 1){
	      level = "Monday";
	  }
	  else if(document.getElementById("day").value == 2){
	        level = "Tuesday";
	    }
			else if(document.getElementById("day").value == 3){
					 level = "Wednesday";
			 }
			 else if(document.getElementById("day").value == 4){
						 level = "Thursday";
				 }
				 else if(document.getElementById("day").value == 5){
							 level = "Friday";
					 }
					 else if(document.getElementById("day").value == 6){
								 level = "Saturday";
						 }

			else{
	        level = "Sunday";
	    }

	  document.getElementById("lvl").innerHTML=("Level: " +level);
		document.getElementById("add").setAttribute("href",l+level);

	}

</script>


<p id="lvl">Level: </p>


<div class="col-12 col-sm-12">
		<div class="form-group">
		<label for="address">Day</label>

<select class="form-control" id="day" name="days" onchange='changeLevel()'>
	<option value=1> Monday</option>
	<option value=2> Tuesday</option>
	<option value=3> Wednesday</option>
	<option value=4> Thursday</option>
	<option value=5> Friday</option>
	<option value=6> Saturday</option>
	<option value=7> Sunday</option>
</select>
</div></div>
					<div class=" col-12 col-sm-6"><a id="add" type="submit" class="btn btn-primary" href="/set_days_teachers/<?php $phpVar ?>">Add </a> </div>









						<div class="col-12 col-sm-12">
								<div class="form-group">
						<table border="1">
							<tr> <th>Days</th>
							 </tr>
<?php foreach($days as $day){ ?>

	<tr> <td> <?= $day['days']?> </td> </tr>
<?php } ?>
						</table>
					</div></div>

				</fieldset>
						<div class="col-12 col-sm-9">
							<div class="form-group">



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
						<div class="col-12">

						<button type="submit" class="col-3 btn btn-primary float-right">Register </button>
					</div>
					</div>
				</form>
</div>
<div class="col-12"">
	<hr/>

	</div>
</div>
</div>

</div>

<?= $this->endSection() ?>lo
