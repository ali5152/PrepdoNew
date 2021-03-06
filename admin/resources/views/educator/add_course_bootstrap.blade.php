@include('educator/header')

            <!-- start page content -->

            <div class="page-content-wrapper">

                <div class="page-content">

                    <div class="page-bar">

                        <div class="page-title-breadcrumb">

                            <div class=" pull-left">

                                <div class="page-title">Add Exam</div>

                            </div>

                            <ol class="breadcrumb page-breadcrumb pull-right">

                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{url('/')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li><a class="parent-item" href="#">Exam</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li class="active">Add Exam</li>

                            </ol>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12">

                            <div class="card card-box">

                                <div class="card-head">

                                    <header>Exam Details</header>

                                     <button id = "panel-button"

                                           class = "mdl-button mdl-js-button mdl-button--icon pull-right"

                                           data-upgraded = ",MaterialButton">

                                           <i class = "material-icons">more_vert</i>

                                        </button>

                                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"

                                           data-mdl-for = "panel-button">

                                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>

                                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>

                                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>

                                        </ul>

                                </div>

                                <div class="card-body" id="bar-parent">

                                    <form action="{{ url('AddCourseSubmit') }}" method="POST" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">

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

                                                <label class="control-label col-md-3">Exam Name

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="text" name="course_name" value="{{ old('course_name') }}" required="true" placeholder="Enter course name" class="form-control input-height" /> </div>

                                            </div>

                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Exam Code

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="text" name="course_code" required="true" value="{{ old('course_code') }}" placeholder="Enter course code" class="form-control input-height" /> </div>

                                            </div>

                                             <div class="form-group row">

                                                <label class="control-label col-md-3">Exam Description



                                                </label>

                                                <div class="col-md-5">

                                                    <textarea name="course_des" class="form-control">{{ old('course_des') }}</textarea>

                                                    </div>

                                            </div>

                                           
                                           <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Course Details

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <textarea name="address" placeholder="course details" class="form-control-textarea" rows="5" ></textarea>

                                                </div>

                                            </div> -->

                                          <!--   <div class="form-group row">

                                                <label class="control-label col-md-3">Starting Date

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">

                                                <input class="form-control input-height" size="16" placeholder="Starting Date" type="text" value="">

                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>

                                            </div>

                                            <input type="hidden" id="dtp_input2" value="" />

                                                </div>

                                            </div> -->

                                           <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Course Duration

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="text" name="csuration" placeholder="Course Duration" class="form-control input-height" /> </div>

                                            </div> -->

                                         <!--    <div class="form-group row">

                                                <label class="control-label col-md-3">Course Price

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="text" name="cprice" placeholder="Course Price" class="form-control input-height" /> </div>

                                            </div> -->

                                             <div class="form-group row">

                                                <label class="control-label col-md-3">Select a Module

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <select class="form-control input-height" name="module">

                                                        <option value="">Select...</option>

                                                        <option value="Build Your Basics">Build Your Basics</option>

                                                        <option value="Training Exam">Training Exam</option>

                                                        <option value="Mockup Exam">Mockup Exam</option>

                                                       <!--  <option value="Category 3">Pr. Parit Varma</option> -->

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Exam Type

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <select class="form-control input-height" name="exam_type">

                                                        <option value="">Select...</option>

                                                        @foreach($examtypes as $type)

                                                          <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                        @endforeach

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Subscription Plans

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-2">

                                                     <input type="text" name="weekly" required="true" value="{{ old('weekly') }}" placeholder="Weekly Price" class="form-control input-height" /> </div>

                                               
                                                <div class="col-md-2">

                                                     <input type="text" name="monthly" required="true" value="{{ old('monthly') }}" placeholder="Monthly Price" class="form-control input-height" /> </div>

                                            
                                                <div class="col-md-2">

                                                     <input type="text" name="yearly" required="true" value="{{ old('yearly') }}" placeholder="Yearly Price" class="form-control input-height" /> </div>

                                               

                                            </div>


                                           <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Maximum Students

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="text" name="maxstud" placeholder="Maximum Students" class="form-control input-height" /> </div>

                                            </div>

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Contact No.

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input name="number" type="text" placeholder="Contact Number" class="form-control input-height" /> </div>

                                            </div> -->

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Exam Icon

                                                </label>

                                                <div class="compose-editor">

                                                  <input type="file" class="default" required="true" name="images">

                                              </div>

                                            </div>

                                           <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Exams Files

                                                </label>

                                                <div class="compose-editor">

                                                  <input type="file" class="default"  name="files[]" multiple="">

                                              </div>

                                            </div> -->

                                            <div class="form-actions">

                                            <div class="row">

                                                <div class="offset-md-3 col-md-9">

                                                    <button type="submit" class="btn btn-info">Submit</button>

                                                    <button type="button" class="btn btn-default">Cancel</button>

                                                </div>

                                                </div>

                                             </div>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- end page content -->



        </div>

        <!-- end page container -->

   @include('educator/footer')
