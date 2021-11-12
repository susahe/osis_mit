<?= $this->extend('home/dashboard') ?>
<?= $this->Section('content') ?>


<div class="row">
<div class="col-12 col-sm-12">
<div class="shadow-sm p-3 mb-5 bg-white rounded">
<h3 > <?= $staff_user['firstname']." ".$staff_user['lastname']?>'s Dash Board </h3>
<small>you are a  staff account  you can do staff related acctivites though this account's </small>
  <h4> Newly Registred Students </h4>

</div>


<table class="table" >

   <thead class="thead-light">

  <tr>
      <th> ID# </th>


      <th> FIrst Name </th>
      <th> Last Name </th>
      <th>Status </th>
  </tr>
</thead>
<tbody>



<?php foreach($students as $user){ ?>
<tr>
  <td><a class=" btn btn-primary " href="/user_profile_view/<?=esc($user['slug'],'url');?>">  <?= $user['id']?></a></td>



  <td> <?= $user['firstname']?></td>
  <td> <?= $user['lastname']?> </td>
<?php  if ($user['status']==0){

   ?>

  <td>
    <a class="  " type="submit" href="/activate_student/<?=$user['id'];?>"><img class="userstatus" src="<?php echo base_url('img/inactive_user.png');?>"></a>


  </td>

<?php  }
  else
  { ?>
    <td>
    <a class="  " href="/deactivate_student/<?=$user['id'];?>"><img class="userstatus" src="<?php echo base_url('img/active_user.png');?>" ></a>


    <form>
      </td>
  <?php }?>

</tr>



<?php } ?>
  </tbody>
</table>


<div class='row'>
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


<?= $this->endSection() ?>
