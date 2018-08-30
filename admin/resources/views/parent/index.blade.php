


@include('student/header')




            <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="" style="padding: 120px;">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Parents</div>
                            </div>

                        </div>
                    </div>
                   <!-- start widget -->


                   <table id="example" class="table table-striped table-bordered" style="width:100%">
                           <thead>
                               <tr>
                                   <th>Quiz Name</th>
                                   <th>Topic Name</th>
                                   <th>Chapter Name</th>
                                   <th>Course Name</th>
                                   <th>Percentage</th>
                                   <th>Status</th>
                                   
                               </tr>
                           </thead>
                           <tbody>
                            @foreach($data as $value)
                                
                                <?php
                                 $quiz = DB::table('quizes')->where('id',$value->quiz_id)->first();  
                                 $topic = DB::table('topics')->where('id',$quiz->topic_id)->first();              
                                 $chapter = DB::table('chapters')->where('id',$quiz->chapter_id)->first();
                                 $course = DB::table('courses')->where('id',$quiz->course_id)->first();
                                 $percentage = ($value->correct_answers/$value->total_questions) * 100;
                                ?>

                               <tr>
                                   <td>{{ $quiz->name }}</td>
                                   @if($topic)
                                   <td>{{ $topic->name }}</td>
                                   @else
                                   <td>N/A</td>
                                   @endif
                                   @if($chapter)
                                   <td>{{ $chapter->chapter_name }}</td>
                                   @else
                                   <td>N/A</td>
                                   @endif
                                   @if($course)
                                   <td>{{ $course->course_name }}</td>
                                   @else
                                   <td>N/A</td>
                                   @endif
                                   
                                   
                                   
                                   <td>{{ $percentage }}%</td>
                                   <td>@if($percentage < 50) <font color="red" style="font-weight: bolder;"> Failed : {{ $percentage }}%</font> @else <font color="green" style="font-weight: bolder;"> Passed : {{ $percentage }}% </font> @endif</td>
                               </tr>

                            @endforeach
                               
                              

                           </tbody>
                           <tfoot>
                               <tr>
                                  <th>Quiz Name</th>
                                   <th>Topic Name</th>
                                   <th>Chapter Name</th>
                                   <th>Course Name</th>
                                   <th>Percentage</th>
                                   <th>Status</th>
                               </tr>
                           </tfoot>
                       </table>





                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->

            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
 @include('student/footer')
