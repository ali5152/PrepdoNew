@include('educator/header')

            <!-- start page content -->

            <div class="page-content-wrapper">

                <div class="page-content">

                    <div class="page-bar">

                        <div class="page-title-breadcrumb">

                            <div class=" pull-left">

                                <div class="page-title">Add Questions</div>

                            </div>

                            <ol class="breadcrumb page-breadcrumb pull-right">

                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{url('/EducatorDashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li><a class="parent-item" href="#">Questions</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li class="active">Add Questions</li>

                            </ol>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12">

                            <div class="card card-box">

                                <div class="card-head">

                                    <header>Questions Details</header>

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

                                       <form action="{{ url('AddQuestionSubmit') }}" method="POST" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">

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

                                         <div class="form-group row">

                                                <label class="control-label col-md-3">Select a Section

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <select class="form-control" required="true" name="quiz_id">

                                                        <option value="">Select an Option</option>

                                                        @foreach($data as $value1)

                                                         <option value="{{ $value1->id }}">{{ $value1->name }}</option>

                                                        @endforeach

                                                    </select>

                                                    </div>

                                            </div>

                                        <div class="form-group row">

                                                <label class="control-label col-md-3">Select Question Type

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <select class="form-control" required="true" name="question_type" onchange="display(this.value)">

                                                        <option value="">Select a type</option>
                                                        <option value="MCQ">MCQ's</option>
                                                        <option value="Blanks">Fill In the Blanks</option>
                                                        <option value="Checkboxes">Checkboxes</option>
                                                        <option value="Description">Brief Description</option>
                                                        <option value="Audio">Audio</option>

                                                    </select>

                                                    </div>

                                            </div>



                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                         
                                        <div id="display">
                                          

                                        </div>

                         <!--              <div class="">

                                      <label for="">

                                      Question ?

                                      </label>

                                      <input type="text" name="question"  required="true" value="{{ old('question') }}" class="form-control" placeholder="">

                                      <br>



                                      <div class="row">

                                      <div class="col-sm-2">

                                      <input type="text" name="option1" required="true" value="{{ old('option1') }}" class="form-control" placeholder="Option 1">

                                      </div>



                                      <div class="col-sm-2">

                                      <input type="text" name="option2" required="true" value="{{ old('option2') }}" value="" class="form-control" placeholder="Option 2">



                                      </div>





                                      <div class="col-sm-2">

                                      <input type="text" name="option3" required="true" value="{{ old('option3') }}" value="" class="form-control" placeholder="Option 3">

                                      </div>



                                      <div class="col-sm-2">

                                      <input type="text" name="option4" required="true" value="{{ old('option4') }}" value="" class="form-control" placeholder="Option 4">

                                      </div>



                                      <div class="col-sm-2">

                                      <input type="text" name="correct_option" required="true" value="{{ old('correct_option') }}" value="" class="form-control" placeholder="Correct Answer e.g. 1">

                                      </div>



                                      </div>

                                      <br>

                                       

                                        <div class="form-group row">

                                                <label class="control-label col-md-3">Select a Quiz

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <select class="form-control" required="true" name="quiz_id">

                                                        <option value="">Select an Option</option>

                                                        @foreach($data as $value1)

                                                         <option value="{{ $value1->id }}">{{ $value1->name }} ( {{ $value1->code }} )</option>

                                                        @endforeach

                                                    </select>

                                                    </div>

                                            </div>

                                        

                                      <br>



                                      <input type="submit" name="" value="Submit" class="btn btn-primary">



                                      </div> -->

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
     
     function display(type)
     {
       //string = '';
      // alert(type);
      if(type == 'MCQ')
      {
        string = '<div class=""><label for="">Question ?</label>\
                                      <input type="text" name="question"   value="{{ old("question") }}" class="form-control" placeholder="">\
\
                                      <br>\
                                      <div class="row">\
                                      <div class="col-sm-2">\
                                      <input type="text" name="option1"  value="{{ old("option1") }}" class="form-control" placeholder="Option 1">\
                                      </div>\
                                      <div class="col-sm-2">\
                                      <input type="text" name="option2"  value="{{ old("option2") }}" value="" class="form-control" placeholder="Option 2">\
                                      </div>\
                                      <div class="col-sm-2">\
                                      <input type="text" name="option3"  value="{{ old("option3") }}" value="" class="form-control" placeholder="Option 3">\
                                      </div>\
                                      <div class="col-sm-2">\
                                      <input type="text" name="option4"  value="{{ old("option4") }}" value="" class="form-control" placeholder="Option 4">\
                                      </div>\
                                      <div class="col-sm-2">\
                                      <input type="text" name="correct_option"  value="{{ old("correct_option") }}" value="" class="form-control" placeholder="Correct Answer e.g. 1">\
                                      </div>\
                                      <br><br><br>\
                                       <div class="row" style = "padding-left:15px;">\
                                      <div class="col-sm-4">\
                                      <textarea name="explanations"  class = "form-control" placeholder = "Explanations"></textarea>\
                                      </div>\
                                      <div class="col-sm-4">\
                                      <input type="file" name="questionfile"  value="" class="form-control">\
                                      </div>\
                                       <div class="col-sm-4">\
                                      <input type="text" name="filecheck"  value="" class="form-control" placeholder="YES OR NO">\
                                      </div>\
                                      </div>\
                                      <br><br><br>\
                                      </div>  <input type="submit" name="" value="Submit" class="btn btn-primary" style = "float:right;">';
      }
      else if(type == 'Blanks')
      {
        string = '<div class=""><label for="">Question ?</label>\
                                      <input type="text" name="question"   value="{{ old("question") }}" class="form-control" placeholder="">\
\
                                      <br>\
                                      <div class="row" style = "padding-left:15px;">\
                                       <div class="col-sm-2">\
                                      <input type="text" name="correct_option"  value="{{ old("correct_option") }}" value="" class="form-control" placeholder="Correct Answer e.g. Teachers2Students">\
                                      </div>\
                                       <div class="row" style = "padding-left:15px;">\
                                      <div class="col-sm-4">\
                                      <textarea name="explanations"  class = "form-control" placeholder = "Explanations"></textarea>\
                                      </div>\
                                      <div class="col-sm-4">\
                                      <input type="file" name="questionfile"  value="" class="form-control" placeholder="Option 2">\
                                      </div>\
                                      <div class="col-sm-4">\
                                      <input type="text" name="filecheck"  value="" class="form-control" placeholder="YES OR NO">\
                                      </div>\
                                      </div>\
                                      <br><br><br>\
                                      </div>  <input type="submit" name="" value="Submit" class="btn btn-primary" style = "float:right;">';
      }
      else if(type == 'Checkboxes')
      {
        string = '<div class=""><label for="">Question ?</label>\
                                      <input type="text" name="question"   value="{{ old("question") }}" class="form-control" placeholder="">\
\
                                      <br>\
                                      <div class="row">\
                                      <div class="col-sm-2">\
                                      <input type="text" name="option1"  value="{{ old("option1") }}" class="form-control" placeholder="Option 1">\
                                      </div>\
                                      <div class="col-sm-2">\
                                      <input type="text" name="option2"  value="{{ old("option2") }}" value="" class="form-control" placeholder="Option 2">\
                                      </div>\
                                      <div class="col-sm-2">\
                                      <input type="text" name="option3"  value="{{ old("option3") }}" value="" class="form-control" placeholder="Option 3">\
                                      </div>\
                                      <div class="col-sm-2">\
                                      <input type="text" name="option4"  value="{{ old("option4") }}" value="" class="form-control" placeholder="Option 4">\
                                      </div>\
                                      <div class="col-sm-2">\
                                      <input type="text" name="correct_option"  value="{{ old("correct_option") }}" value="" class="form-control" placeholder="Correct Answer e.g. a:b:d">\
                                      </div>\
                                      <br><br><br>\
                                       <div class="row" style = "padding-left:15px;">\
                                      <div class="col-sm-4">\
                                      <textarea name="explanations"  class = "form-control" placeholder = "Explanations"></textarea>\
                                      </div>\
                                      <div class="col-sm-4">\
                                      <input type="file" name="questionfile"  value="" class="form-control" placeholder="Option 2">\
                                      </div>\
                                      <div class="col-sm-4">\
                                      <input type="text" name="filecheck"  value="" class="form-control" placeholder="YES OR NO">\
                                      </div>\
                                      </div>\
                                      <br><br><br>\
                                      </div>  <input type="submit" name="" value="Submit" class="btn btn-primary" style = "float:right;">';
      }
      else if(type == 'Audio')
      {
        string = '<div class=""><label for="">Question ?</label>\
                                      <input type="text" name="question"   value="{{ old("question") }}" class="form-control" placeholder="">\
                                       <br>\
                                      <div class="row" style = "padding-left:15px;">\
                                       <div class="col-sm-2">\
                                      <input type="text" name="correct_option"  value="{{ old("correct_option") }}" value="" class="form-control" placeholder="Correct Answer e.g. Teachers2Students">\
                                      </div>\
                                       <div class="row" style = "padding-left:15px;">\
                                      <div class="col-sm-4">\
                                      <textarea name="explanations" class = "form-control" placeholder = "Explanations"></textarea>\
                                      </div>\
                                      <div class="col-sm-4">\
                                      <input type="file" name="questionfile"  value="" class="form-control" placeholder="Option 2">\
                                      </div>\
                                      <div class="col-sm-4">\
                                      <input type="text" name="filecheck"  value="" class="form-control" placeholder="YES OR NO">\
                                      </div>\
                                      </div>\
                                      <br><br><br>\
                                      </div>  <input type="submit" name="" value="Submit" class="btn btn-primary" style = "float:right;">';
      }
      else if(type == 'Description')
      {
        string = '<div class=""><label for="">Question ?</label>\
                                      <input type="text" name="question"   value="{{ old("question") }}" class="form-control" placeholder="">\
                                       <br>\
                                      <div class="row" style = "padding-left:15px;">\
                                       <div class="col-sm-2">\
                                      <input type="text" name="correct_option"  value="{{ old("correct_option") }}" value="" class="form-control" placeholder="Correct Answer e.g. Teachers2Students">\
                                      </div>\
                                       <div class="row" style = "padding-left:15px;">\
                                      <div class="col-sm-4">\
                                      <textarea name="explanations"  class = "form-control" placeholder = "Explanations"></textarea>\
                                      </div>\
                                      <div class="col-sm-4">\
                                      <input type="file" name="questionfile"  value="" class="form-control" placeholder="Option 2">\
                                      </div>\
                                      <div class="col-sm-4">\
                                      <input type="text" name="filecheck"  value="" class="form-control" placeholder="YES OR NO">\
                                      </div>\
                                      </div>\
                                      <br><br><br>\
                                      </div>  <input type="submit" name="" value="Submit" class="btn btn-primary" style = "float:right;">';
      }

      document.getElementById('display').innerHTML = string;
     }

   </script>