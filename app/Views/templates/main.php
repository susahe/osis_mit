<!-- Header Section -->

<?= $this->include('templates/header') ?>


<div class="container-flex">
      <section id="dasbhoard">
  <div class="row">
    <!-- Navbar -->
    <?= $this->include('templates/nav') ?>
</div>
 <div class="container">
    <div class="row">
        <!-- Side bar -->
          <div class="col-md-3">
                <?php if (session()->get('isLogedIn')): ?>
                              <?= $this->include('templates/sidebar') ?>
                <?php endif; ?>
          </div>
          <div class="col-md-9">
                        <?= $this->renderSection('content') ?>
          </div>
  </div>
</div>
</section>
</div>




<!-- fotter section -->
  <?= $this->include('templates/footer') ?>
