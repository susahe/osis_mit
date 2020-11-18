
<?= $this->include('templates/header') ?>



    <!-- Navbar -->
    <?= $this->include('templates/nav') ?>


        <!-- Side bar -->
        <?php if (session()->get('isLogedIn')): ?>
          <?= $this->include('templates/sidebar') ?>
        <?php endif; ?>


        <!--body Section content -->

        <?= $this->renderSection('content') ?>






<!-- fotter section -->
  <?= $this->include('templates/footer') ?>
