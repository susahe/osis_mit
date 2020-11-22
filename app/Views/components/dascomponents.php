


                  <?php if ((session()->get('isLogedIn')) && (session()->get('loginUser')=='Admin')): ?>

                    <div class="inner">
                      <p class="d-flex flex-column text-right">
                            <i class="ion ion-android-arrow-up text-success"></i> <h3>6</h3>
                      <span class="font-weight-bold">

                      </span>
                      <span class="text-muted"><a class="btn btn-primary" href="/students">NEW APPLICATIONS</a></span>
                    </p>
                    </div>

               <?php elseif((session()->get('isLogedIn')) && (session()->get('loginUser')=='Staff')):?>
                 <div class="inner">
                   <p class="d-flex flex-column text-right">
                         <i class="ion ion-android-arrow-up text-success"></i> <h3>6</h3>
                   <span class="font-weight-bold">

                   </span>
                   <span class="text-muted"><a class="btn btn-primary" href="/students">NEW APPLICATIONS</a></span>
                 </p>
                 </div>
               <?php elseif((session()->get('isLogedIn')) && (session()->get('loginUser')=='Teacher')):?>
              <h1>Teacher</h1>
               <?php elseif((session()->get('isLogedIn')) && (session()->get('loginUser')=='Parent')):?>
                <h1>Parnet</h1>
               <?php elseif((session()->get('isLogedIn')) && (session()->get('loginUser')=='Student')):?>
                <div>
                    <h1>Student</h1>
                </div>
               <?php endif;?>
