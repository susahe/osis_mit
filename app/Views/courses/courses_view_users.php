<?= $this->extend('home/dashboard') ?>
<?= $this->Section('content') ?>
<h1> Welcome to MIT Computer Training Center </h1>

<table class="table" >

   <thead class="thead-light">



  <tr>
      <th> ID# </th>
      <th> Course Name </th>
      <th>  Theory Hours</th>

      <th> Practical Hrs </th>
      <th> Project Hrs </th>
      <th> Course Fees </th>
      <th> Course Type </th>
      <th> Course Image </th>
      <th> Action </th>


  </tr>
</thead>
<tbody>

<?php foreach($courses as $course){ ?>
<tr>
  <td><a class=" btn btn-primary " href="/course_view/<?=esc($course['csslug'],'url');?>">  <?= $course['id']?></a></td>
  <td> <a class=" " href="/course_view/<?=esc($course['csslug'],'url');?>"> <?= $course['csname']?></a> </td>










  <td> <?= $course['cstheryhrs']?>  </td>
  <td> <?= $course['cspracthrs']?>  </td>

  <td> <?= $course['csfees']?>  </td>
  <td> <?= $course['cstype']?>  </td>
  <td> <?= $course['csimage']?>  </td>
  <td> <?= $course['csduemonths']?>  </td>

<td> <a href="#">Apply for Course</a>

</tr>
<?php } ?>
  </tbody>
</table>

<?= $this->endSection() ?>
