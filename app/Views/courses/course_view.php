<?= $this->extend('templates/main') ?>
<?= $this->Section('content') ?>

<div role="main" class="col-md ml-sm-auto col-lg-10 pt-3 px-4">
	<div class="d-flex justify-cotnet-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<?php foreach($courses as $cs){ ?>
<div class="card" style="width: 18rem;">
	<img src="..." class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title"><?= $cs['coursename']?></h5>
     <p class="card-text"><?= $cs['courseduraion'].' '.$cs['coursefees']?> </p>
     <a href="#" class="btn btn-primary">Add</a>
   </div>
</div>
<?php } ?>
</div>
</div> 
<?= $this->endSection() ?>
