<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EarningController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PaymentInfoController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Controller;

use App\Http\Controllers\AcademicController;
use App\Http\Controllers\TikController;
use App\Http\Controllers\FaceController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BonusController;
use App\Http\Controllers\MessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Controller::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin', [OrderController::class, 'index'])->middleware(['auth', 'verified', 'all']);

Route::resource('/contact', ContactController::class);

Route::resource('/paymentInfo', PaymentInfoController::class);
Route::resource('/order', OrderController::class);

Route::resource('/review', ReviewController::class);
Route::resource('/message', MessageController::class);
Route::resource('/bonus', BonusController::class);
Route::resource('/academic', AcademicController::class);
Route::resource('/tik', TikController::class);
Route::resource('/web', WebController::class);
Route::resource('/earning', EarningController::class);
Route::resource('/face', FaceController::class);

Route::get('/servicecreate', function () {
    return view('livewire.serviceCreate');
});


Route::get('/coursecreate', function () {
    return view('livewire.courseCreate');
});
Route::get('/facecreate', function () {
    return view('livewire.faceCreate');
});
Route::get('/webcreate', function () {
    return view('livewire.webCreate');
});
Route::get('/tikcreate', function () {
    return view('livewire.tikCreate');
});
Route::get('/academiccreate', function () {
    return view('livewire.academicCreate');
});
Route::resource('/course', CourseController::class);

Route::get('/terms-and-condition', function () {
    return view('livewire.terms');
});

Route::resource('/faq', FaqController::class);



Route::resource('/service', serviceController::class);




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
