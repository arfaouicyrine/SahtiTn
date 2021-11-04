<?php

use App\Mail\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

Route::get('/', 'HomeController@sahti');

// Articles routes

Route::get('magazine' , 'ArticleFrontController@index');
Route::get('magazine/article' , 'ArticleFrontController@show');

//Hospital Routes
Route::get('/search-hospital', 'Frontend\SearchController@hospitals');


/* search doctor */
Route::get('/search-doctor', 'Frontend\SearchController@doctors');
// Fetching locations in searching
Route::post('SearchController/fetch', 'Frontend\SearchController@location')->name('searchlocation.fetch');
//Fetching departments and displaying  them
Route::post('SearchController/department', 'Frontend\SearchController@department')->name('department.fetch');
// To dispaly doctors
Route::get('/viewDoc' , 'Frontend\SearchController@viewDoc')->name('department.doctor');

// to search doctor by state and department
Route::post('/search/doctor' , 'Frontend\SearchController@searchDoctor') ;

//to see doctor details
Route::get('/view/{id}' , 'Frontend\SearchController@docDetail');


/*Route::get('/search-hospital', function //() {
    return view('frontend.search.hospital');
});*/





// To search hospitals
Route::post('/hospital/search' , 'Frontend\SearchController@searchHospitals');



















Auth::routes(['verify'  => true]);
// Patient Routes
Route::group(['middleware' => ['auth', 'isUser']], function () {

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/my-profile','Frontend\UserController@myprofile');
Route::post('/my-profile-update' , 'Frontend\UserController@profileupdate');
Route::get('takeAppointment', ['uses' => 'Frontend\PatientController@takeAppointmentform', 'as' => 'patient.takeAppointment']);
Route::post('{id}/reserve' ,'Frontend\PatientController@takeAppointment');
Route::get('/my-appointments', 'Frontend\PatientController@history');

});



// Admin Routes
Route::group(['middleware' =>['auth','isAdmin']], function(){
    Route::get('/dashboard', 'Admin\HomeController@index');
    Route::get('edit-profile' , 'Admin\HomeController@profile' );

    Route::get('registered-users' , 'Admin\RegisteredController@index');
    Route::get('role-edit/{id}' , 'Admin\RegisteredController@edit');
    Route::put('role-update/{id}' , 'Admin\RegisteredController@updaterole');

   // Department Routes by Admin
   Route::get('department' , 'Admin\DepartmentController@index' );
   Route::get('department-add' , 'Admin\DepartmentController@add');
   Route::post('department-store' ,'Admin\DepartmentController@store');
   Route::get('department-edit/{id}', 'Admin\DepartmentController@edit');
   Route::put('department-update/{id}' , 'Admin\DepartmentController@update');
   Route::get('department-delete/{id}' , 'Admin\DepartmentController@delete');




   // Doctor Routes by Admin
   Route::get('/doctor-list', 'Admin\DoctorController@index');
   Route::get('doctor-add' , 'Admin\DoctorController@create');
   Route::post('/doctor-store' , 'Admin\DoctorController@store');
   Route::get('doctor-edit/{id}' , 'Admin\DoctorController@edit');
   Route::put('doctor-update/{id}','Admin\DoctorController@update');
   Route::get('doctor-delete/{id}', 'Admin\DoctorController@delete');



   // Appointment Routes by Admin
   Route::get('appointment' , 'Admin\AppointmentController@index');
   Route::get('appointment-add' , 'Admin\AppointmentController@create');
   Route::post('appointment-store' , 'Admin\AppointmentController@store');
   Route::get('appointment-edit/{id}' , 'Admin\AppointmentController@edit');
   Route::put('appointment-update/{id}' , 'Admin\AppointmentController@update');
   Route::get('appointment-delete/{id}' , 'Admin\AppointmentController@delete');



   //Article Routes by Admin
   Route::get('article' ,'Admin\ArticleController@index');
   Route::get('add-article','Admin\ArticleController@create');
   Route::post('/article-store' ,'Admin\ArticleController@store');
   Route::get('edit-article/{id}', 'Admin\ArticleController@edit');
   Route::put('article-update/{id}' ,'Admin\ArticleController@update');
   Route::get('article-delete/{id}' , 'Admin\ArticleController@delete');

    // Location routes by admin
    Route::get('location', 'Admin\LocationController@index')->name('location');
    Route::get('location-add' , 'Admin\LocationController@create')->name('location.add');
    Route::post('location-store' , 'Admin\LocationController@store')->name('location-store');
    Route::get('location-edit/{id}' , 'Admin\LocationController@edit')->name('location-edit');
    Route::put('location-update/{id}' , 'Admin\LocationController@update')->name('location-update');
    Route::get('location-delete/{id}', 'Admin\ArticleController@delete');

    // Hospital routes by admin

    Route::get('hospital' , 'Admin\HospitalController@index')->name('hospital');
    Route::get('hospital-add', 'Admin\HospitalController@create');
    Route::post('hospital-store', 'Admin\HospitalController@store');
    Route::get('/hospital-edit/{id}' , 'Admin\HospitalController@edit');
    Route::post('/hospital-update/{id}' , 'Admin\HospitalController@update');
    Route::get('hospital-delete/{id}', 'Admin\HospitalController@delete');






});


// Doctor Routes

Route::group(['middleware' => ['auth', 'isDoctor']], function () {
    Route::get('/doctor', 'Frontend\DoctorProfileController@doctor');



    Route::get('profile', ['uses' => 'Frontend\DoctorProfileController@index', 'as' => 'doctor.profile']);
    Route::post('profile-edit' , 'Frontend\DoctorProfileController@profileUpdate');
    Route::get('setSchedule', ['uses' => 'Frontend\DoctorProfileController@appointments', 'as' => 'doctor.setSchedule']);
    Route::get('setSchedule/{appointment}','Frontend\DoctorProfileController@appointmentsDetail');
    Route::post('setSchedule/{appointment}', 'Frontend\DoctorProfileController@sendEmail');



});











// Forum Routes
Route::get('forum' , 'ForumController@index')->name('forum.index');
Route::get('forum-create', 'ForumController@create')->name('forum.create');
Route::put('forum-store', 'ForumController@store')->name('forum.store');
Route::get('show/{id}' , 'ForumController@show');
// Reponse routes
//Route::resource('/reponse', 'ReponseController');
Route::post('/reponse' , 'ReponseController@store')->name('reponse.store');
// Email routes

Route::get('/email' , 'Frontend\DoctorProfileController@sendEmail');


// to reserve an appointment
Route::get('/view/{id}/reserve', 'Frontend\PatientController@takeAppointmentform');






