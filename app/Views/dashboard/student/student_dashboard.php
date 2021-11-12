<?= $this->extend('home/dashboard') ?>
<?= $this->Section('content') ?>

<div class="row">
<div class="col-12 col-sm-12">
<div class="shadow-sm p-3 mb-5 bg-white rounded">
<h3 > <?= $student_user['firstname']." ".$student_user['lastname']?>'s Dash Board  </h3>

</div>




<div class='row'>
  <div class="col-12 col-sm-6">
  <div class="shadow-sm p-3 mb5 bg-white rounded  col-lg-12">
    <h4> Enrolled Courses </h4>
    <?php foreach ($enroled_courses as $data): ?>
        <h3><?=$data['csname']?> </h3>
    <?php endforeach; ?>
  </div>
  </div>





<div class="col-12 col-sm-3">
<div class="shadow-sm p-3 mb5 bg-white rounded  col-lg-12">
<h6>Registred Students</h6>
 <h4><?= $student_reg?></h4>
</div>
</div>
<div class="col-12 col-sm-3">
<div class="shadow-sm p-3 mb-5 bg-white rounded  col-lg-12">
<h6>Current Students</h6>
 <h4><?= $student_active?></h4>
</div>
<div>
</div>


</div>
</div>
</div>
</div>
<?= $this->endSection() ?>
