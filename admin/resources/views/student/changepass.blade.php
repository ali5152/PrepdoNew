


@include('student/header')





            <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="" style="padding: 120px;">
              <div class="page-content" style="min-height:558.422px">
                  <div class="page-bar">
                      <div class="page-title-breadcrumb">
                          <div class=" pull-left">
                              <div class="page-title"></div>
                          </div>
                          <ol class="breadcrumb page-breadcrumb pull-right">
                              <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="http://localhost/MAS">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                              </li>

                              <li class="active">Change Password</li>
                          </ol>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12 col-sm-12">
                          <div class="card card-box">
                              <div class="card-head">
                                  <header>Change Password</header>
                                   <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                                 <i class="material-icons">more_vert</i>
                              </button>
                              <div class="mdl-menu__container is-upgraded"><div class="mdl-menu__outline mdl-menu--bottom-right"></div><ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events" data-mdl-for="panel-button" data-upgraded=",MaterialMenu,MaterialRipple">
                                 <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">assistant_photo</i>Action<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
                                 <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">print</i>Another action<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
                                 <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">favorite</i>Something else here<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
                              </ul></div>
                              </div>
                              <div class="card-body" id="bar-parent">
                                  <form class="form-horizontal" action="{{ url('ChangePass') }}" method="POST">
                                    <center>
               @if(session()->has('sucess'))
                               <div class="alert alert-success">
                                  {{ session()->get('sucess') }}
                                  </div>
                                    @endif
                                   
                                  <?php

                                  $count = count($errors->all());
                                  if($count > 0)
                                  {
                                    
                                    echo '<div class="alert alert-danger">';
                                    foreach ($errors->all() as $value) 
                                    {
                                      echo $value."<br>";
                                    }
                                    echo '</div>';
                                    
                                  } 
                                  ?>
</center>
                                      <div class="form-body">
                                          <div class="form-group row">
                                              <label class="control-label col-md-3">Current Password
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-5">
                                                  <input type="password" name="opass" data-required="1" placeholder="Current Password" class="form-control input-height"> </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="control-label col-md-3">New Password
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-5">
                                                  <input type="password" name="new_password" data-required="1" placeholder="New Password" class="form-control input-height"> </div>
                                          </div>
                                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                           <div class="form-group row">
                                              <label class="control-label col-md-3">Confirm New Password
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-5">
                                                  <input type="password" name="confirm_password" data-required="1" placeholder="Confirm Password" class="form-control input-height"> </div>
                                          </div>





                  </div>
                                      <div class="form-actions">
                                          <div class="row">
                                              <div class="offset-md-3 col-md-9">
                                                  <button type="submit" class="btn btn-info">Submit</button>
                                                  <button type="button" class="btn btn-default">Cancel</button>
                                              </div>
                                            </div>
                                        </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
 @include('student/footer')
