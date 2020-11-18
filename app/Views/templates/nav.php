<!--This is the uri -->
<?php   $uri = service('uri');  ?>

<!--Nav bar starting point -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark flex-md-nowrap p-1">
  <a class="navbar-brand col-sm-3 cols-md-2 mr-0" href="#">MIT Computer Training Center</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>



  <div class="collapse navbar-collapse" id="navbarNav">
    <?php if ((session()->get('isLogedIn')) && (session()->get('loginUser')=='Admin')): ?>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?=($uri->getSegment(1)=='dashboard' ? 'active' : null )?>">
          <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?=($uri->getSegment(1)=='profile' ? 'active' : null )?>"">
          <a class="nav-link" href="/profile">Profile</a>
        </li>
        <li class="nav-item <?=($uri->getSegment(1)=='createcourse' ? 'active' : null )?>"">
          <a class="nav-link" href="/createcourse">Create Course</a>
        </li>
        <li class="nav-item <?=($uri->getSegment(1)=='register' ? 'active' : null )?>"">
          <a class="nav-link" href="/register">Create Usere</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="/logout">Logout</a>
        </li>
      </ul>
    <?php elseif((session()->get('isLogedIn')) && (session()->get('loginUser')=='Staff')):?>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?=($uri->getSegment(1)=='dashboard' ? 'active' : null )?>">
          <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?=($uri->getSegment(1)=='profile' ? 'active' : null )?>"">
          <a class="nav-link" href="/profile">Profile</a>
        </li>
        <li class="nav-item <?=($uri->getSegment(1)=='createcourse' ? 'active' : null )?>"">
          <a class="nav-link" href="/createcourse">Create Course</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="/logout">Logout</a>
        </li>
      </ul>
    <?php elseif((session()->get('isLogedIn')) && (session()->get('loginUser')=='Teacher')):?>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?=($uri->getSegment(1)=='dashboard' ? 'active' : null )?>">
          <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?=($uri->getSegment(1)=='profile' ? 'active' : null )?>"">
          <a class="nav-link" href="/profile">Profile</a>
        </li>
        <li class="nav-item <?=($uri->getSegment(1)=='createcourse' ? 'active' : null )?>"">
          <a class="nav-link" href="/createcourse">Create Course</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="/logout">Logout</a>
        </li>
      </ul>

    <?php elseif((session()->get('isLogedIn')) && (session()->get('loginUser')=='Parent')):?>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?=($uri->getSegment(1)=='dashboard' ? 'active' : null )?>">
          <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?=($uri->getSegment(1)=='profile' ? 'active' : null )?>"">
          <a class="nav-link" href="/profile">Profile</a>
        </li>
        <li class="nav-item <?=($uri->getSegment(1)=='createcourse' ? 'active' : null )?>"">
          <a class="nav-link" href="/createcourse">Create Course</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="/logout">Logout</a>
        </li>
      </ul>

    <?php elseif((session()->get('isLogedIn')) && (session()->get('loginUser')=='Student')):?>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?=($uri->getSegment(1)=='dashboard' ? 'active' : null )?>">
          <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?=($uri->getSegment(1)=='profile' ? 'active' : null )?>"">
          <a class="nav-link" href="/profile">Profile</a>
        </li>
        <li class="nav-item <?=($uri->getSegment(1)=='createcourse' ? 'active' : null )?>"">
          <a class="nav-link" href="/createcourse">Create Course</a>
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
      <li class="nav-item <?=($uri->getSegment(1)=='studentapplication' ? 'active' : null )?>"">
        <a class="nav-link" href="/createstudent">Aplply for Course</a>
      </li>
      <li class="nav-item <?=($uri->getSegment(1)=='verifycertificate' ? 'active' : null )?>"">
        <a class="nav-link" href="/verifycertificate">Certicate Verification</a>
      </li>
    </ul>
  <?php endif;?>
  </div>
</nav>
