<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\FrontendPagesController;
use App\Http\Controllers\Frontend\LocalController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|
|   Normal User role = 0
|   Super Admin role = 1
|   Sub Admin role = 2
|   Sub Admin role = 2
|   Admin role = 3
|
|
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', [AuthController::class, 'loadRegister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
// Route::get('/login', function () {
//     return redirect('/');
// });
Route::get('/login', [AuthController::class, 'loadLogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);

// ********** Super Admin Routes *********
Route::group(['prefix' => 'super-admin', 'middleware' => ['web', 'isSuperAdmin']], function () {
    Route::get('/dashboard', [SuperAdminController::class, 'dashboard']);

    Route::get('/users', [SuperAdminController::class, 'users'])->name('superAdminUsers');
    Route::get('/manage-role', [SuperAdminController::class, 'manageRole'])->name('manageRole');
    Route::post('/update-role', [SuperAdminController::class, 'updateRole'])->name('updateRole');

    Route::get('/rental', [SuperAdminController::class, 'rental'])->name('superAdminRental');


});

// ********** Sub Admin Routes *********
Route::group(['prefix' => 'sub-admin', 'middleware' => ['web', 'isSubAdmin']], function () {
    Route::get('/dashboard', [SubAdminController::class, 'dashboard']);
});

// ********** Admin Routes *********
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'isAdmin']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
});

// ********** User Routes *********
Route::group(['middleware' => ['web', 'isUser']], function () {
    Route::get('/dashboard', [UserController::class, 'dashboard']);
});


// Frontend Pages
// Route::get('/{lang?}',[FrontendPagesController::class,'home'])->name('FrontendHome');
Route::get('lang/change',[LocalController::class,'change'])->name('FrontendLocal');

Route::get('/',[FrontendPagesController::class,'home'])->name('FrontendHome');
Route::get('/about',[FrontendPagesController::class,'about'])->name('FrontendAbout');
Route::get('/service',[FrontendPagesController::class,'service'])->name('Frontendservice');


Route::get('/limousine-service',[FrontendPagesController::class,'limousineservice'])->name('Frontendlimousineservice');
Route::get('/airport-transfer',[FrontendPagesController::class,'airporttransfer'])->name('Frontendairporttransfer');
Route::get('/chauffeur-service',[FrontendPagesController::class,'chauffeurservice'])->name('Frontendchauffeurservice');
Route::get('/event-service',[FrontendPagesController::class,'eventservice'])->name('Frontendeventservice');
Route::get('/courier-service',[FrontendPagesController::class,'courierservice'])->name('Frontendcourierservice');
Route::get('/roadshows',[FrontendPagesController::class,'roadshows'])->name('Frontendroadshows');




Route::get('/cars',[FrontendPagesController::class,'cars'])->name('Frontendcars');
Route::post('/cars-rentel',[FrontendPagesController::class,'carsrentel'])->name('Frontendcarsrentel');
Route::get('/contact',[FrontendPagesController::class,'contact'])->name('Frontendcontact');


Route::get('/S500-2023',[FrontendPagesController::class,'S5002023'])->name('FrontendcardetilsS5002023');
Route::get('/S350-2016',[FrontendPagesController::class,'S3502016'])->name('FrontendcardetilsS3502016');
Route::get('/v-350d',[FrontendPagesController::class,'v350d'])->name('FrontendcardetilsV350d');
Route::get('/v-350dbaige',[FrontendPagesController::class,'v350dbaige'])->name('FrontendcardetilsV350dbaige');
Route::get('/sprinter-2023',[FrontendPagesController::class,'Sprinter2023'])->name('FrontendcardetilsSprinter2023');
Route::get('/busses',[FrontendPagesController::class,'busses'])->name('FrontendcardetilsBusses');
Route::get('/mercedes-glc',[FrontendPagesController::class,'mercedesglc'])->name('FrontendcardetilsGLC');
Route::post('/service-save',[FrontendPagesController::class,'servicesave'])->name('FrontendServiceSave');
