<?= $this->extend('templates/out') ?>
<?= $this->Section('content') ?>
<div class="row">

<?php foreach($courses as $cs){ ?>
	  <div class="col-sm-4">
<div class="card border-info mb-3" style="max-width:25rem;">
	 <h5 class="card-header"><?= $cs['csname']?></h5>
	<img src="/uploads/images/<?= $cs['csimage']; ?> " class="card-img-top" alt="...">
   <div class="card-body text-info">
		 	<ul class="list-group list-group-flush">
		 		<li class="list-group-item">Pre Requeist:<?= $cs['csentryqly']?></li>
		 		<li class="list-group-item">Course Type:<?= $cs['cstype']?></li>

		 		<li class="list-group-item"> Course Duration in Months:   <?= $cs['csduemonths']?></li>
		 <li class="list-group-item">Course Fees:Rs. <?= $cs['csfees']?>/-</div>
		 	</ul>



		  <div class="card-footer text-muted">
		  Course Duration- Thoery :   <?= $cs['cstheryhrs']?>
		  Course Duration- Practical :   <?= $cs['cspracthrs']?>
		  Course Duration- Assingments : <?= $cs['csassinghrs']?>
		  Course Duration- Projects : <?= $cs['csprojecthrs']?>

		 </div>

     <a href="#" class="btn btn-primary">Apply For Course</a>

</div>
</div>
<?php } ?>
</div>

<?= $this->endSection() ?>
