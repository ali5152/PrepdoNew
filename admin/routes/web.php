<?php
session_start();
$_SESSION['adminController'] = 0;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
///////////////////////////// Educators ////////////////////////////////////////////////////////

Route::get('/','EducatorController@login');

Route::get('/logout','LoginController@logout');

Route::post('loginUser','LoginController@login');

Route::post('/reset', 'UserController@resetpass');

Route::post('/ChangePass/','LoginController@ChangePass');

Route::get('/ChangePass', 'StudentController@changepass');

Route::get('/resetpass/{credentials}', 'UserController@resetpass_email');

Route::group(['middleware' => 'educator'],function()
{

//dd($_SESSION['adminController']);
if($_SESSION['adminController'] == 2)
{
  Route::get('/Dashboard', 'EducatorController@home');

  Route::get('AddUsers','EducatorController@addstudents');

  Route::post('AddStudentSubmit','EducatorController@addstudentsubmit');

  Route::get('Users','EducatorController@allstudents');

  Route::get('EditStudents','EducatorController@editstudents');

  Route::get('BlockUser/{ID}','EducatorController@BlockUser');

  Route::get('BlockUser2/{ID}','EducatorController@BlockUser2');

  Route::get('EnableUser/{ID}','EducatorController@EnableUser');

  Route::get('EnableUser2/{ID}','EducatorController@EnableUser2');

  Route::post('EditStudentSubmit','EducatorController@EditStudentSubmit');

  Route::get('EditUser/{ID}','EducatorController@editStudents');

  Route::get('DeleteUser/{ID}','EducatorController@DeleteStudent');

  Route::get('ErrorReport/','EducatorController@ErrorReport');

}
else
{

Route::get('/Dashboard', 'EducatorController@home');

Route::get('Event','EducatorController@event');

Route::get('AllPartners','EducatorController@allprofessors');

Route::get('AddPartners','EducatorController@addprofessor');

Route::post('AddProfessorSubmit','EducatorController@addprofessorsubmit');

Route::post('EditProfessorSubmit','EducatorController@EditProfessorSubmit');

Route::post('AddExamTypes','EducatorController@AddExamTypes');

Route::post('AddExcerciseTypes','EducatorController@AddExcerciseTypes');

Route::get('DeleteExamType/{ID}','EducatorController@DeleteExamType');

Route::get('DisableExamType/{ID}','EducatorController@DisableExamType');

Route::get('DisableExcerciseType/{ID}','EducatorController@DisableExcerciseType');

Route::get('DeleteExcerciseType/{ID}','EducatorController@DeleteExcerciseType');

Route::get('EnableExamType/{ID}','EducatorController@EnableExamType');

Route::get('DisableExcercise/{ID}','EducatorController@DisableExcercise');

Route::get('EnableExcercise/{ID}','EducatorController@EnableExcercise');

Route::get('DisableExam/{ID}','EducatorController@DisableExam');

Route::get('EnableQuestion/{ID}','EducatorController@EnableQuestion');

Route::get('DisableQuestion/{ID}','EducatorController@DisableQuestion');

Route::get('EnableExam/{ID}','EducatorController@EnableExam');

Route::get('DisableSection/{ID}','EducatorController@DisableSection');

Route::get('EnableSection/{ID}','EducatorController@EnableSection');

Route::get('EnableExcerciseType/{ID}','EducatorController@EnableExcerciseType');

Route::post('EditExamType','EducatorController@EditExamType');

Route::post('EditExcerciseType','EducatorController@EditExcerciseType');

Route::get('EditPatner/{ID}','EducatorController@editprofessor');

Route::get('BlockUser/{ID}','EducatorController@BlockUser');

Route::get('BlockUser2/{ID}','EducatorController@BlockUser2');

Route::get('EnableUser/{ID}','EducatorController@EnableUser');

Route::get('EnableUser2/{ID}','EducatorController@EnableUser2');

Route::get('DeletePatner/{ID}','EducatorController@DeleteProfessor');

Route::get('AboutProfessor','EducatorController@aboutprofessor');

Route::get('ExamCategorizations','EducatorController@ExamCategorizations');

Route::get('ExcerciseCategorizations','EducatorController@ExcerciseCategorizations');

Route::get('Users','EducatorController@allstudents');


// Route::get('AddUsers','EducatorController@addstudents');

Route::post('AddStudentSubmit','EducatorController@addstudentsubmit');

Route::get('EditStudents','EducatorController@editstudents');

Route::post('EditStudentSubmit','EducatorController@EditStudentSubmit');

Route::get('EditUser/{ID}','EducatorController@editStudents');

Route::get('DeleteUser/{ID}','EducatorController@DeleteStudent');

Route::get('AboutStudent','EducatorController@aboutstudent');

Route::get('AllExams','EducatorController@allcourses');

Route::get('AddExam','EducatorController@addcourses');

Route::post('AddCourseSubmit','EducatorController@AddCourseSubmit');

Route::get('EditCourses','EducatorController@editcourses');

Route::post('EditCourseSubmit','EducatorController@EditCourseSubmit');

Route::get('EditExam/{ID}','EducatorController@editcourses');

Route::get('DeleteExam/{ID}','EducatorController@DeleteCourse');

Route::get('DeleteFile/{ID}','EducatorController@DeleteFile');

Route::get('AboutCourses','EducatorController@aboutcourses');

Route::post('AddCourseSubmit','EducatorController@AddCourseSubmit');

Route::get('Fees','EducatorController@fees');

Route::get('AddFees','EducatorController@addfees');

Route::get('FeeReceipt','EducatorController@feereceipt');

Route::get('AllChapters','EducatorController@allchapters');

Route::get('AddChapter','EducatorController@addchapter');

Route::post('AddChapterSubmit','EducatorController@AddChapterSubmit');

Route::get('EditChapter/{ID}','EducatorController@editchapter');

Route::get('DeleteChapter/{ID}','EducatorController@DeleteChapter');

Route::post('EditChapterSubmit','EducatorController@EditChapterSubmit');

Route::get('AllExercise','EducatorController@alltopics');

Route::get('AddExercise','EducatorController@addtopic');

Route::post('AddTopicSubmit','EducatorController@AddTopicSubmit');

Route::get('EditExcercise/{ID}','EducatorController@edittopic');

Route::get('DeleteExcercise/{ID}','EducatorController@DeleteTopic');

Route::post('EditTopicSubmit','EducatorController@EditTopicSubmit');

Route::get('AllAssignments','EducatorController@allassignments');

Route::get('DeleteTopic/{ID}','EducatorController@DeleteTopic');

Route::get('AddAssignment','EducatorController@addassignments');

Route::post('AddAssignmentSubmit','EducatorController@AddAssignmentSubmit');

Route::get('EditAssignment/{ID}','EducatorController@editassignments');

Route::get('DeleteAssignment/{ID}','EducatorController@DeleteAssignment');

Route::post('EditAssignmentSubmit','EducatorController@EditAssignmentSubmit');

Route::get('AllSections','EducatorController@allquiz');

Route::get('AddSection','EducatorController@addquiz');

Route::post('AddQuizSubmit','EducatorController@AddQuizSubmit');

Route::get('EditSection/{ID}','EducatorController@editquiz');

Route::get('DeleteSection/{ID}','EducatorController@DeleteQuiz');

Route::post('EditQuizSubmit','EducatorController@EditQuizSubmit');

Route::get('AllQuestion','EducatorController@allquestion');

Route::get('AddQuestion','EducatorController@addquestion');

Route::post('AddQuestionSubmit','EducatorController@AddQuestionSubmit');

Route::get('EditQuestion/{ID}','EducatorController@editquestion');

Route::get('DeleteQuestion/{ID}','EducatorController@DeleteQuestion');

Route::post('EditQuestionSubmit','EducatorController@EditQuestionSubmit');
} 


});

Route::group(['middleware' => 'student'],function()
{
	Route::get('/StudentPortal', 'StudentController@home');

	Route::get('/SubjectDetails/{ID}', 'StudentController@subjectdetail');

	Route::get('/ChapterDetails/{ID}', 'StudentController@ChapterDetails');

	Route::get('/TopicDetails/{ID}', 'StudentController@TopicDetails');

	Route::get('AttemptQuiz/{ID}','StudentController@AttemptQuiz');

	Route::get('ShowQuizes','StudentController@ShowQuizes');

	Route::get('/AssignmentDetails/{ID}', 'StudentController@AssignmentDetails');

	Route::get('/Topics', 'StudentController@topic');

	Route::post('/QuizSubmit', 'StudentController@QuizSubmit');

	Route::get('/Question', 'StudentController@question');
});

Route::group(['middleware' => 'parentrequest'],function()
{

   Route::get('/ParentPortal', 'ParentController@parenthome');

});
