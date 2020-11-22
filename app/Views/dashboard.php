  <?= $this->extend('templates/main') ?>
  <?= $this->Section('content') ?>
  <div role="main" class="col-md ml-sm-auto col-lg-9 pt-3 px-4 t-m">
    <div class="d-flex justify-cotnet-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <?php if (session()->get('sucess')): ?>
      <div class="alert alert-success" role="alert">
          <?= session()->get('sucess')?>
        </div>
      <?php endif; ?>
      <?= $this->include('components/dascomponents') ?>

</div>
</div>
<?= $this->endSection() ?>
