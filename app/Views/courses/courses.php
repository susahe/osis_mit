<?= $this->extend('templates/main') ?>
<?= $this->Section('content') ?>
<div class="row">
	<div class="col-md-12">


	<h6> School Student Courses </h6>
 <table>
	 <tr>
	<th>#</th><th>Course Name</th><th>action </th>
</tr>
	<ol>
<?php foreach($courses as $cs){ ?>
	<tr>
  <td><li> </li></td><td><?= $cs['csname']?></td> <td><a href="/register_student" class="btn btn-primary">Apply For Course</a></td>
</tr>


<?php } ?>

</ol>
</table>

</div>
</div>
<div class="row">
	<div class="cold-md-12">
			<h6> School Leaver Course </h6>
			<table>
		 	 <tr>
		 	<th>#</th><th>Course Name</th><th>action </th>
		 </tr>
		 	<ol>
		 <?php foreach($courses as $cs){ ?>
		 	<tr>
		   <td><li> </li></td><td><?= $cs['csname']?></td> <td><a href="/register_student" class="btn btn-primary">Apply For Course</a></td>
		 </tr>


		 <?php } ?>

		 </ol>
		 </table>
	</div>

</div>
<?= $this->endSection() ?>
