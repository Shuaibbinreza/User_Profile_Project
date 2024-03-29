<?php

use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordProviderCustom;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;

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

// Route::get("email", [AuthController::class,"home"])->name("home");
Route::get("pass-pro", [PasswordProviderCustom::class,"create"])->name("pass.pro");
Route::get('sendmail', [MailController ::class,'index'])->name('sendmail');
Route::get('forgot-controller', [PasswordResetLinkController::class,'create'])->name('forgot-password');
Route::get('profile-details', [AuthController::class,'profileDetails'])->name('profile-details');
Route::get('profile-edit', [AuthController::class,'profileEdit'])->name('profile-edit');
Route::get('/search-entities', [AuthController::class, 'searchEntities'])->name('search.entities');


// Route::post('/submit-form1', [AuthController::class, 'formSubmit1'])->name('submit-form1');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/test', [FormController::class, 'index']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/register-p2', [AuthController::class, 'registerP2'])->name('register-p2');
    Route::post('/submit-form', [AuthController::class, 'formSubmit'])->name('submit-form');
    Route::post('/submit-multi-form', [AuthController::class, 'formSubmit'])->name('submit-multi-form');
    Route::post('/submit-form', [AuthController::class, 'formSubmit1'])->name('submit.test');
    Route::put('/submit-form/{id}/update', [AuthController::class, 'personal_update'])->name('submit.update');
    Route::post('/education/{id}/delete', [AuthController::class, 'educationDelete'])->name('education.delete');
    Route::get('/profile-details', [AuthController::class,'profileDetails'])->name('profile.details');
    Route::post('/education-added', [AuthController::class,'education_create'])->name('education.create');
    Route::put('/education-updated', [AuthController::class, 'education_update'])->name('education.update');
    Route::delete('/education-deleted', [AuthController::class,'educationDelete'])->name('education.delete');

    // Route::name('user-management.')->group(function () {
    //     Route::resource('/user-management/users', UserManagementController::class);
    //     Route::resource('/user-management/roles', RoleManagementController::class);
    //     Route::resource('/user-management/permissions', PermissionManagementController::class);
    // });

});

Route::get('/error', function () {
    abort(500);
});

// Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';
