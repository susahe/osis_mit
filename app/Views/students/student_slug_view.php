<?= $this->extend('templates/main') ?>
<?= $this->Section('content') ?>

<div role="main" class="col-md ml-sm-auto col-lg-10 pt-3 px-4">

  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
 <h5 class="card-title"><?= $student['certname']?></h5>

<p> First Name : <?= $student['firstname']?> </p>
<p> Last Name : <?= $student['lastname']?>
<p> Gender : <?= $student['gender']?>
<p> NIC Number : <?= $student['nic']?>
<p> Home Telephone Number : <?= $student['hometel']?>
<p> Mobile Number : <?= $student['mobile']?>
<div>
 <a class=" btn btn-primary" type="submit" href="/reject"> Accept</a>
 <a class=" btn btn-primary" type="submit" href="/reject"> Reject</a>
</div>
</div>
</div>
</div>
<?= $this->endSection() ?>
