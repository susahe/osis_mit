<?= $this->extend('templates/out') ?>
<?= $this->Section('content') ?>

<div class="container mainmargin" >
  <h1> Certificate is Valid</h1>
<h3> <?= $certificate['idcertificate'].' '.$certificate['userid']?> </h3>
</div>
<?= $this->endSection() ?>
