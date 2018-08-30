@include('educator/header')

            <!-- start page content -->

            <div class="page-content-wrapper">

                <div class="page-content">

                    <div class="page-bar">

                        <div class="page-title-breadcrumb">

                            <div class=" pull-left">

                                <div class="page-title">Add Exercise</div>

                            </div>

                            <ol class="breadcrumb page-breadcrumb pull-right">

                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{url('/EducatorDashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li><a class="parent-item" href="#">Exercise</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li class="active">Add Exercise</li>

                            </ol>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12">

                            <div class="card card-box">

                                <div class="card-head">

                                    <header>Exercise Details</header>

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

                                    <form action="{{ url('AddTopicSubmit') }}" method="POST" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">

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

                                                <label class="control-label col-md-3">Exercise Name

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="text" name="topic_name" value="{{ old('topic_name') }}" required="true" placeholder="Enter topic name" class="form-control input-height" /> </div>

                                            </div>

                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Exercise Code

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="text" name="topic_code" required="true" placeholder="Enter topic code" class="form-control input-height" /> </div>

                                            </div>

                                             <div class="form-group row">

                                                <label class="control-label col-md-3">Exercise Timer

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="text" name="timer" value="{{ old('timer') }}" required="true" placeholder="72000" class="form-control input-height" />
                                                    <span style="font-size: 10px; float: right;">Format Seconds</span> </div>

                                            </div>


                                            <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Exercise Description



                                                </label>

                                                <div class="col-md-5">

                                                    <textarea name="topic_des" class="form-control">{{ old('topic_des') }}</textarea>

                                                    </div>

                                            </div> -->

                                            <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Warm Up



                                                </label>

                                                <div class="col-md-5">

                                                    <textarea name="warm_up" class="form-control">{{ old('Warm_up') }}</textarea>

                                                    </div>

                                            </div> -->

                                             <!-- <div class="form-group row">

                                                <label class="control-label col-md-3">Warm Up Files ( Optional )

                                                </label>

                                                <div class="compose-editor">

                                                  <input type="file" class="default" name="warm[]" multiple="">

                                              </div>

                                            </div> -->

                                            <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Instructions


                                                </label>

                                                <div class="col-md-5">

                                                    <textarea name="instruction" class="form-control">{{ old('instructions') }}</textarea>

                                                    </div>

                                            </div> -->

                                             <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Instruction Files ( Optional )

                                                </label>

                                                <div class="compose-editor">

                                                  <input type="file" class="default" name="inst[]" multiple="">

                                              </div>

                                            </div> -->

                                            <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Summary



                                                </label>

                                                <div class="col-md-5">

                                                    <textarea name="summary" class="form-control">{{ old('summary') }}</textarea>

                                                    </div>

                                            </div> -->


                                            <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Summary Files ( Optional )

                                                </label>

                                                <div class="compose-editor">

                                                  <input type="file" class="default" name="sum[]" multiple="">

                                              </div>

                                            </div> -->

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Select the Exam

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <select class="form-control" required="true" name="course_id">

                                                        <option value="">Select an Option</option>

                                                        @foreach($data as $value)

                                                         <option value="{{ $value->id }}">{{ $value->course_name }}</option>

                                                        @endforeach

                                                    </select>

                                                    </div>

                                            </div>

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

                                                <label class="control-label col-md-3">Select a Plan

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <select class="form-control input-height" name="module">

                                                        <option value="">Select...</option>

                                                        <option value="1">Paid</option>

                                                        <option value="2">Free</option>

                                                       <!--  <option value="Category 3">Pr. Parit Varma</option> -->

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Excercise Type

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <select class="form-control" required="true" name="excercise_type">

                                                        <option value="">Select an Option</option>

                                                        @foreach($data1 as $value1)

                                                         <option value="{{ $value1->id }}">{{ $value1->name }}</option>

                                                        @endforeach

                                                    </select>

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

                                           <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Professor Name

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <select class="form-control input-height" name="proff">

                                                        <option value="">Select...</option>

                                                        <option value="Category 1">Pr. Jayesh Patel</option>

                                                        <option value="Category 2">Pr. Salini Parmar</option>

                                                        <option value="Category 3">Pr. Mayank Trivedi</option>

                                                        <option value="Category 3">Pr. Parit Varma</option>

                                                    </select>

                                                </div>

                                            </div> -->

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

                                            <!-- <div class="form-group row">

                                                <label class="control-label col-md-3">Picture

                                                </label>

                                                <div class="compose-editor">

                                                  <input type="file" class="default" required="true" name="images">

                                              </div>

                                            </div> -->

                                          <!--   <div class="form-group row">

                                                <label class="control-label col-md-3">Topic Files

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
