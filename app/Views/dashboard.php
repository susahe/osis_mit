  <?= $this->extend('templates/main') ?>
  <?= $this->Section('content') ?>
  <div role="main" class="col-md ml-sm-auto col-lg-9 pt-3 px-4">
    <div class="d-flex justify-cotnet-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <?php if (session()->get('sucess')): ?>
      <div class="alert alert-success" role="alert">
          <?= session()->get('sucess')?>
        </div>
      <?php endif; ?>
                  <div class="inner">
                    <p class="d-flex flex-column text-right">
                          <i class="ion ion-android-arrow-up text-success"></i> <h3>6</h3>
                    <span class="font-weight-bold">

                    </span>
                    <span class="text-muted"><a class="btn btn-primary" href="/Students">NEW APPLICATIONS</a></span>
                  </p>
                </div>
</div>
</div>
<?= $this->endSection() ?>
