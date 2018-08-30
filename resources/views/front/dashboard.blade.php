<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style media="screen">
html { margin:0; padding:0;}
body{background-color:#ffffff;font-family: 'Open Sans', sans-serif;font-size:14px; }

.header{background:#1fb1bd;padding:7px 50px 7px 50px;height:60px;position:absolute;left:0;right:0;overflow:hidden;width:auto;}
.inst-logo{float:left; position:relative; z-index:15px;}
.header h1{text-align:center;color:#fff;margin:15px 0 10px 0;float:left;display:inline-block;left:0;right:0;position:absolute;font-size:22px;font-weight:normal; z-index:15px;}
.inst-profile{float:right;text-align:right;padding: 15px 0;}
.inst-profile > img{border-radius:50px; vertical-align:middle;}
.inst-profile span {color: #fff;font-size:18px;margin:0 10px 0 0; vertical-align:middle;right:100px;top:20px;}
.instraction{line-height:30px;padding:0 10px 0 10px;position:absolute;top:81px;bottom:95px;left:0;right:0;text-align:justify;overflow:auto;}
.top-table-inst {border-collapse:collapse;width: 100%;border-bottom:1px solid #d8d9db;border-left:1px solid #d8d9db;border-top:1px solid #d8d9db;}
.coloumn-black { background-color: #eff0f0;border-right:1px solid #d8d9db;color:#000000;font-weight:bold;}
.coloumn-gray {background-color: #ffffff;border-right: 1px solid #d8d9db;border-top: 1px solid #d8d9db;color: #202020;overflow-wrap: break-word;}
.inst-table-sec {border-collapse:collapse;}
.inst-table-sec, td, th {border:1px solid #d8d9db;width:auto;text-align:center;padding:15px 7px;}
td p { margin:0;}
.instr-footer{background:#e8e9e9;padding:7px 50px 7px 50px;position:absolute;bottom:0px;height:40px;overflow:hidden;left:0;right:0;width:auto;}
.bottam-check{float:left;color:#F00;font-size:12px;margin:14px 0 14px 0;font-weight:normal;vertical-align:top; width:70%;}
.check-align{vertical-align: top; margin: 1px 8px 0px 0px;align="top";}
.showdefaultlanglage{float:left; margin:10px 25px 0 25px;}
.submit1 {float:right;}
span.submit-button1 { background: rgba(0, 0, 0, 0) none repeat scroll 0 0; border: 1px solid #ccc;  border-radius: 4px;  display: inline-block;  font-size: 16px; letter-spacing: 1px; margin: 5px 0 0; padding: 2px 14px;}
a.submit-button1 { background: #1fb1bd;  border: 1px solid #1fb1bd; color:#fff; border-radius: 4px; display: inline-block; font-size: 16px; letter-spacing: 1px; margin: 5px 0 0; padding: 2px 14px; text-decoration:none;}
.submit_active, .submit_active .submit-button {  background-color: #3173b4 !important; color: #fff !important;}
.submit{border:1px solid #bdbdbd;border-radius:4px;color:#000000;display:block;float:right;margin:0 10px 0 0;text-decoration: none;}
.submit-button {background: rgba(0, 0, 0, 0) none repeat scroll 0 0; border: medium none; cursor: pointer;  margin: 0; padding:7px 19px; font-size:17px; letter-spacing:1px; }

@media(max-width:767px) {
.header { padding:7px 10px;}
.header h1 { position:inherit; float:left; font-size:9px;font-size:13px; margin:5px 115px 2px 68px; text-align:left;}
.inst-profile span { font-size:14px;}
.instr-footer { height:auto; padding:10px 15px;}

table {display: block; overflow-x: scroll; overflow-y: hidden; white-space: nowrap; width: 100%;}
}

</style>

<body data-gr-c-s-loaded="true" cz-shortcut-listen="true">
	<div class="header">
		<div class="inst-logo">
			<a href="{{url('/')}}">
				<img alt="logo" src="{{url('images/logo.png')}}" height="60" width="60" style="padding-bottom: 8%;">
			</a>
		</div>
		<?php
        $string = '';
        $count = 0;
        $data = DB::table('chapters')->where('id',$ID)->first();
        $course = DB::table('courses')->where('id',$data->course_id)->first();
        //$chapter = DB::table('chapters')->where('id',$course->cahpter_id)->first();
        $user = DB::table('users')->where('id',Auth::id())->first();
        $categories = DB::table('quizes')->where('chapter_id',$data->id)->get();
        foreach ($categories as $key => $value) 
        {
        	$questions = $categories = DB::table('questions')->where('quiz_id',$value->id)->count();
        	$count = $count + $questions;
        	$string .= $value->name.',';
        }
        //dd($course);
		?>
		<h1>
			{{ $course->course_name }}
		</h1>

		<div class="inst-profile"><span>Hi, {{ $user->name }}</span>
			
		</div>
		<div class="clear"></div>
	</div>
	<div class="instraction">
		<table class="top-table-inst">
			<tbody>
				<tr>
					<th class="coloumn-black">Study Package</th>
					<th class="coloumn-black">Exam Name</th>
					<th class="coloumn-black">Package Name</th>
					<th class="coloumn-black">Subject Name</th>
					<th class="coloumn-black">Total Questions</th>
					<th class="coloumn-black">Total Time (min)</th>
				</tr>
				<tr class="top-table">
					<td class="coloumn-gray">Online Test Series</td>
					<td class="coloumn-gray">{{ $course->course_name }}</td>
					<td class="coloumn-gray">{{ $data->chapter_name }}</td>
					<td class="coloumn-gray">{{ $string }}</td>
					<td class="coloumn-gray">{{ $count }}</td>
					<td class="coloumn-gray">90</td>
				</tr>
			</tbody>
		</table>
		<p><span style="font-size:12pt"><strong>Please Read the Instructions Carefully</strong></span>
		</p>
		<p><span style="font-size:12pt"><strong><u>General Instructions:</u></strong></span>
		</p>
		<ol>
			<li><span style="font-size:12pt">Total duration of examination is <strong>90&nbsp;</strong>minutes.</span>
			</li>
			<li><span style="font-size:12pt">The clock will be set at the server. The countdown timer in the top right corner of screen will display the remaining time available for you to complete the examination. When the timer reaches zero, the examination will end by itself. You will not be required to end or submit your examination.</span>
			</li>
			<li><span style="font-size:12pt">The Question Palette displayed on the right side of screen will show the status of each question.</span>
			</li>
		</ol>
	
		<ol>
			<li><span style="font-size:12pt">The Marked for Review status for a question simply indicates that you would like to look at that question again. If a question is answered and Marked for Review, your answer for that question will be considered in the evaluation.</span>
			</li>
			<li><span style="font-size:12pt">You can click on the "&gt;" arrow which appears to the left of question palette to collapse the question palette thereby maximizing the question window. To view the question palette again, you can click on "&lt;" which appears on the right side of question window.</span>
			</li>
		</ol>
		<p>
			<br>
<span style="font-size:12pt"><strong><u>Navigating to a Question :</u></strong></span>
		</p>
		<ol>
			<li><span style="font-size:12pt">To answer a question, do the following:</span>
				<ol style="list-style-type:lower-alpha">
					<li><span style="font-size:12pt">Click on the question number in the Question Palette at the right of your screen to go to that numbered question directly. Note that using this option does NOT save your answer to the current question.</span>
					</li>
					<li><span style="font-size:12pt">Click on&nbsp;<strong>Save &amp; Next</strong>&nbsp;to save your answer for the current question and then go to the next question.</span>
					</li>
					<!-- <li><span style="font-size:12pt">Click on&nbsp;<strong>Mark for Review &amp; Next&nbsp;</strong>to save your answer for the current question, mark it for review, and then go to the next question.</span>
					</li> -->
				</ol>
			</li>
		</ol>
		<p>
			<br>
<span style="font-size:12pt"><strong><u>Answering a Question :</u></strong></span>
		</p>
		<ol>
			<li><span style="font-size:12pt">Procedure for answering a multiple choice type question:</span>
				<ol style="list-style-type:lower-alpha">
					<li><span style="font-size:12pt">To select your answer, click on the button of one of the options</span>
					</li>
					<li><span style="font-size:12pt">To deselect your chosen answer, click on the button of the chosen option again or click on the&nbsp;<strong>Clear Response</strong>&nbsp;button</span>
					</li>
					<li><span style="font-size:12pt">To change your chosen answer, click on the button of another option</span>
					</li>
					<li><span style="font-size:12pt">To save your answer, you MUST click on the&nbsp;<strong>Save &amp; Next</strong>&nbsp;button</span>
					</li>
					<!-- <li><span style="font-size:12pt">To mark the question for review, click on the&nbsp;<strong>Mark for Review &amp; Next</strong>&nbsp;button. If an answer is selected for a question that is Marked for Review, that answer will be considered in the evaluation.</span>
					</li> -->
				</ol>
			</li>
			<li><span style="font-size:12pt">To change your answer to a question that has already been answered, first select that question for answering and then follow the procedure for answering that type of question.</span>
			</li>
			<li><span style="font-size:12pt">Note that ONLY Questions for which answers are saved or marked for review after answering will be considered for evaluation.</span>
			</li>
		</ol>
		<p>
			<br>


			 <center><a id="startExam" name="startExam" href="{{url('Quiz',$ID)}}" ><button class="btn btn-default" style="background-color: #1FB1BD; color: white;"> Start Exam</button></a>
			 </center>

	</div>


</body>
<script type="text/javascript">
	localStorage.removeItem("seconds");
	localStorage.removeItem("minutes");
	localStorage.removeItem("hours");
</script>