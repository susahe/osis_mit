<?= $this->include('templates/header') ?>
<h1>Users View</h1>


<table class="table" >

   <thead class="thead-light">

  <tr>
      <th> ID# </th>
      <th> First Name </th>
      <th> Last Name </th>

      <th> role </th>
      <th> Created </th>
      <th> Last login </th>
      <th> email </th>
      <th>action </th>
      <th> Status </th>
  </tr>
</thead>
<tbody>

<?php foreach($users as $user){ ?>
<tr>
  <td> <?= $user['idusers']?></td>
  <td> <?= $user['firstname']?> </td>
  <td> <?= $user['lastname']?>  </td>


  <td> <?= $user['role']?>  </td>
  <td> <?= $user['created']?>  </td>
  <td> <?= $user['lastlogin']?>  </td>
  <td> <?= $user['email']?>  </td>
  <td> <a href=# ><?= $user['status']?></a>  </td>
  <td> <a class=" btn btn-primary" href="/accept"> Edit
	 <a class=" btn btn-primary " href="/user_profile_view/<?=esc($user['slug'],'url');?>"> View</a> </td>

</tr>



<?php } ?>
  </tbody>
</table>

<?= $this->include('templates/footer') ?>
