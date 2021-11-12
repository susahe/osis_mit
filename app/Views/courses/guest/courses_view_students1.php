<?= $this->extend('home/dashboard') ?>
<?= $this->Section('content') ?>
<h3> Welcome to MIT Computer Training Center </h3>
<div class="container">
  <div class="p-3">
<h4> Are you School Student or School Leaver? </h4>

<span class="" ><a class="cstype_yes  " type="submit" href="/course_select/1">School Leaver</a> </span>
<span class=""><a class=" cstype_yes " type="submit" href="/course_select/2">School Student</a></span>
</div>
<div class="p-3">
<p> to register for course please select a the course and click apply for course  </p>
</div>
</div>
<?php if ($courses) : ?>
<table class="table" >


<?php foreach($courses as $course){ ?>
<tr>
  <td><a class=" btn btn-primary " href="/course_view/<?=esc($course['csslug'],'url');?>">  <?= $course['id']?></a></td>
  <td> <a class=" " href="/course_view/<?=esc($course['csslug'],'url');?>"> <?= $course['csname']?></a> </td>













</tr>
<?php }?>
<?php endif;?>
  </tbody>
</table>

<?= $this->endSection() ?>
