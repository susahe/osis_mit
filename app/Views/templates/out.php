
<?= $this->include('templates/header') ?>



    <!-- Navbar -->
    <?= $this->include('templates/nav') ?>
<div class="container-fluid">
<div class="row  mb-2">

        <!-- Side bar -->
        <?php if (session()->get('isLogedIn')): ?>
          <?= $this->include('templates/sidebar') ?>
        <?php endif; ?>


        <!--body Section content -->

        <?= $this->renderSection('content') ?>

</div>
</div>




<!-- fotter section -->
  <?= $this->include('templates/footer') ?>
