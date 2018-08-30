@include('educator/header')

            <!-- start page content -->

            <div class="page-content-wrapper">

                <div class="page-content">

                    <div class="page-bar">

                        <div class="page-title-breadcrumb">

                            <div class=" pull-left">

                                <div class="page-title">Edit Section</div>

                            </div>

                            <ol class="breadcrumb page-breadcrumb pull-right">

                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{url('/EducatorDashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li><a class="parent-item" href="#">Section</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li class="active">Edit Section</li>

                            </ol>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12">

                            <div class="card card-box">

                                <div class="card-head">

                                    <header>Section Details</header>

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

                                    <form action="{{ url('EditQuizSubmit') }}" method="POST" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">

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

                                                <label class="control-label col-md-3">Section Heading

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="text" name="quiz_name" value="{{ $data->name }}" required="true" placeholder="Enter quiz name" class="form-control input-height" /> </div>

                                            </div>

                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                          <!--   <div class="form-group row">

                                                <label class="control-label col-md-3">Section Code

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="text" readonly="" name="quiz_code" required="true" value="{{ $data->code }}" placeholder="Enter quiz code" class="form-control input-height" /> </div>

                                            </div>
 -->
                                            <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Quiz Description

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <textarea name="quiz_des" class="form-control" required="true">{{ $data->detail }}</textarea>

                                                    </div>

                                            </div>
 -->
                                            

                                           

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Exercise

                                                    <span class="required"> * </span>

                                                </label>

                                                <?php

                                               $topic = DB::table('topics')->where('id',$data->topic_id)->first();

                                                ?>

                                                <div class="col-md-5">

                                                     @if($topic)

                                                      <input type="text" class="form-control" readonly="" name="" value="{{ $topic->name }}">

                                                      @else

                                                   <input type="text" readonly="" class="form-control" name="" value="N/A">

                                                      @endif

                                                    </div>

                                            </div>
                                             <br>
                                            <center>
                                            <div class="form-group row">
                                                 <div class="col-md-2">
                                                     
                                                 </div>
                                                

                                                <div class="col-md-2">

                                                    <input type="text"  id="instruction" placeholder="Instruction 1" class="form-control input-height" /> </div>

                                                    <div class="col-md-2">

                                                    <input type="text" id="description" placeholder="Brief Description" class="form-control input-height" /> </div>

                                                    <div class="col-md-2">
                                                     <select class="form-control input-height" id="filetype">

                                                        <option value="">Select a File Type</option>

                                                        <option value="audio">Audio</option>
                                                        <option value="image">Image</option>
                                                        <option value="image">Text</option>
                                                    </select>
                                                     </div>

                                                    <div class="col-md-2">
                                                        <input type="button" id="add-row" class="btn btn-danger" value="Add Row">
                                                    </div>

                                            </div>
                                        </center>

                                         <table class="table">
        <thead>
            <tr>
                <th>Select</th>
                <th>Instructions</th>
                <th>Description</th>
                <th>File Type</th>
                <th>Choose File</th>
                 <th>Previous File</th>
                 <th>Action</th>
            </tr>
        </thead>
        <tbody>
             <?php 
        $files = DB::table('system_files')->where('quiz_id',$data->id)->get();
        ?>

      
        <!-- <br> -->
      
        @foreach($files as $file)
            <tr>
                <td><input type="checkbox" name="record"></td>
                <td>{{ $file->instructions }}</td>
                <td>{{ $file->description }}</td>
                <td>{{ $file->filetype }}</td>
                <td></td>
                <td><a href="url('public/uploads')/{{ $file->filename }}">{{ $file->filename }}</a></td>
                <td><a href="{{ url('DeleteFile') }}/{{ $file->id }}">Delete From Database</a></td>
            </tr>
             @endforeach
        </tbody>
    </table>
    <button type="button" class="delete-row">Delete Row</button>

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

                                           <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Quiz Files ( Optional )

                                                </label>

                                                <div class="compose-editor">

                                                  <input type="file" class="default"  name="files[]" multiple="">

                                              </div>

                                            </div> -->

                                            <input type="hidden" name="quiz_id" value="{{ $data->id }}">


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

            <!-- start chat sidebar -->

           
            <!-- end chat sidebar -->

        </div>

        <!-- end page container -->

   @include('educator/footer')

   <script type="text/javascript">
    $(document).ready(function(){
        $("#add-row").click(function(){
            var instruction = $("#instruction").val();
            var description = $("#description").val();
            var filetype = $("#filetype").val();
            var markup = "<tr><td><input type='checkbox' name='record'></td><td><input type='hidden' value = '"+instruction+"' name='instruction[]'>" + instruction + "</td><td><input type='hidden' value = '"+description+"' name='description[]'>" + description + "</td><td><input type='hidden' value = '"+filetype+"' name='filetype[]'>" + filetype + "</td><td><input type='file' name = 'files[]'></td></tr>";
            $("table tbody").append(markup);
        });
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    
</script>