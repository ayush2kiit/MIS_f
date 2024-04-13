<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Std;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TrashController;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/customer',function(){
    $data=Std::all();
    echo "<pre>";
    print_r($data->toArray());

});
Route::post('/students', 'StudentController@store')->name('store_student');

Route::get('/students/view',[RegistrationController::class,'view'])->name('students.view');
Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'store']);
Route::get('/student/delete/{adm_no}',[RegistrationController::class,'delete'])->name('customer.delete');


Route::get('/upload', 'App\Http\Controllers\UploadController@showUploadForm')->name('upload.form');
Route::post('/upload', 'App\Http\Controllers\UploadController@upload')->name('upload.process');

Route::get('/bin', [TrashController::class, 'view'])->name('bin.view');

Route::get('/bin/{adm_no}',[TrashController::class,'move_to_database']);

