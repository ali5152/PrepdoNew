<?php

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
// this is for user view

Route::group(['middleware' => 'login'],function()
{

Route::get('Test', 'FrontController@test');

Route::get('Instructions/{ID}', 'FrontController@dashboard');

Route::get('Quiz/{id}', 'FrontController@quiz')->name('Quiz');

Route::get('/changePassword','HomeController@showChangePasswordForm');

Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Route::post('test/submit-test','FrontController@SubmitQuiz');

Route::get('UpdateTimer/{hours}/{minutes}/{seconds}','FrontController@UpdateTimer');

Route::get('select-test', 'FrontController@selecttest')->name('select-test'); 

Route::get('user-profile',
    function (){

    return "User Profile page";
    })->name('user-profile');

});

Route::get('/Payment', 'FrontController@payment')->name('payment');
Route::get('/AttemptedExams', 'FrontController@attempted')->name('attemptedexams');

Route::get('/', 'FrontController@home');

Route::post('/success', 'PaymentPayUmoney@success');

Route::post('/failure', 'PaymentPayUmoney@failure');



Route::get('questions/{id}', 'FrontController@fetchQuestions')->name('questions');

Route::post('result', 'FrontController@show')->name('result');


Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/video-courses','VideoCoursesController@index');


Route::get('/chapters/{id}','ChapterController@courseExcercie')->name('chapters');
Route::get('/topics/{id}','TopicController@index')->name('topics');
Route::get('/assignments/{id}','AssesmentsController@index')->name('assignments');

 Route::get('exam/{id}', 'FrontController@exam')->name('exam');

Route::get('make-payment/{ID?}', [
    'as' => 'make-payment',
    'uses' => 'PaymentPayUmoney@SubscribProcess'
]);

Route::get('make-payment', [
    'as' => 'make-payment',
    'uses' => 'PaymentPayUmoney@SubscribProcessView'
]);



Route::post('make-payment/{ID?}', [
    'as' => 'make-payment',
    'uses' => 'PaymentPayUmoney@SubscribProcess'
]);


Route::get('payment-cancel', [
    'as' => 'payment-cancel',
    'uses' => 'PaymentPayUmoney@SubscribeCancel'
]);

Route::get('status-response', [
    'as' => 'status-response',
    'uses' => 'PaymentPayUmoney@SubscribeResponse'
]);