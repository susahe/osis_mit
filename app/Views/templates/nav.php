<?php
  $uri = service('uri');

 ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MIT Computer Training Center</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>



  <div class="collapse navbar-collapse" id="navbarNav">
    <?php if (session()->get('isLogedIn')): ?>
      <ul class="navbar-nav">
        <li class="nav-item <?=($uri->getSegment(1)=='dashboard' ? 'active' : null )?>">
          <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?=($uri->getSegment(1)=='profile' ? 'active' : null )?>"">
          <a class="nav-link" href="/profile">Profile</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="/logout">Logout</a>
        </li>
      </ul>
    <?php else:?>
    <ul class="navbar-nav">

      <li class="nav-item <?=($uri->getSegment(1)=='' ? 'active' :null )?>"">
        <a class="nav-link" href="/">Login</a>
      </li>
      <li class="nav-item <?=($uri->getSegment(1)=='register' ? 'active' : null )?>"">
        <a class="nav-link" href="/register">Register</a>
      </li>
    </ul>
  <?php endif;?>
  </div>
</nav>
