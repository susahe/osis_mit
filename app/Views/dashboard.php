  <?= $this->extend('templates/main') ?>
  <?= $this->Section('content') ?>

  <div role="main" class="col-md ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-cotnet-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <?php if (session()->get('sucess')): ?>
      <div class="alert alert-success" role="alert">
          <?= session()->get('sucess')?>
        </div>
      <?php endif; ?>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>

</div>
</div>
<?= $this->endSection() ?>
