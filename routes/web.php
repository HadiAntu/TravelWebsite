<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\TripController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',[HomeController::class,'index'])->name('home');


Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [AdminController::class,'loginForm']);
    Route::post('admin/login', [AdminController::class,'store'])->name('admin.login');
});

// admin dasboard route
Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admindashboard');
    
    Route::get('/admin/addTeam',[ManagementController::class,'addTeam'])->name('addTeam');
    Route::post('/admin/addTeam',[ManagementController::class,'teamMemberAdd'])->name('teamMemberAdd');
    Route::get('/delete/{id}', [ManagementController::class,'delete'])->name('delete');
    Route::get('/admin/blog', [ManagementController::class,'blog'])->name('blog');
    Route::post('/admin/blogAdd',[ManagementController::class,'blogAdd'])->name('blogAdd');
    Route::post('/admin/dashboard',[ManagementController::class,'dashBoardHomePage'])->name('dashBoardHomePage');
    Route::get('/admin/trip',[TripController::class,'trip'])->name('trip');
    Route::post('/admin/tripadd',[TripController::class,'tripadd'])->name('tripadd');
    Route::get('/admin/order',[TripController::class,'order'])->name('order');

    

});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/bookNowForm/{price}/{id}', [TripController::class,'bookNowForm'])->name('bookNowForm');
    Route::post('/stripe/{price}', [TripController::class,'stripePost'])->name('stripe.post');
});



// home route
Route::get('/blog/{id}', [HomeController::class,'singlepageBlog'])->name('singlepageBlog');
Route::get('/trip/{id}', [TripController::class,'singlepageTrp'])->name('singlepageTrp');
Route::get('/aboutUs', [HomeController::class,'aboutUs'])->name('aboutUs');
Route::get('/blog', [HomeController::class,'blogMainPage'])->name('blogMainPage');
Route::get('/ContactUs', [HomeController::class,'ContactUs'])->name('ContactUs');
Route::post('/ContactUs', [HomeController::class,'message'])->name('message');
Route::post('/testimonial', [HomeController::class,'testimonial'])->name('testimonial');
