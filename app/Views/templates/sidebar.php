<?php
  $uri = service('uri');

 ?>

<input type="checkbox" name="checkbox" id="checkbox">
   <aside id="sidebar">
       <header class="navbar-header">
           <a href="#" class="brand-logo"> CSSSCRIPT</a>
       </header>
       <main class="navbar-body">
           <ul>
               <li class="nav-item">
                   <a href="" class="nav-link"> Option 1 </a>
               </li>
               <li class="nav-item">
                   <a href="" class="nav-link"> Option 1 </a>
               </li>
               <li class="nav-item">
                   <a href="" class="nav-link"> Option 1 </a>
               </li>
               <li class="nav-item">
                   <a href="" class="nav-link"> Option 1 </a>
               </li>
               <li class="nav-item">
                   <a href="" class="nav-link"> Option 1 </a>
               </li>
               <li class="nav-item">
                   <a href="" class="nav-link"> Option 1 </a>
               </li>
               <li class="nav-item">
                   <a href="" class="nav-link"> Option 1 </a>
               </li>
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
   </aside>
