<!-- Header Section -->

<?= $this->include('templates/header') ?>


<div class="container-flex mainmargin">
  <div class="row">
    <!-- Navbar -->
    <?= $this->include('templates/nav') ?>

 <div class="container-fluid">
    <div class="row">
        <!-- Side bar -->
        <?php if (session()->get('isLogedIn')): ?>
          <?= $this->include('templates/sidebar') ?>
        <?php endif; ?>


        <!--body Section content -->

        <?= $this->renderSection('content') ?>

  </div>
</div>
</div>
</div>



<!-- fotter section -->
  <?= $this->include('templates/footer') ?>
