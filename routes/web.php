<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FrontendlayoutController;
use App\Http\Controllers\PaymentCategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPostController;
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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', [FrontendlayoutController::class, 'home'])->name('home');
Route::get('/about', [FrontendlayoutController::class, 'about'])->name('about');
Route::get('/poems', [FrontendlayoutController::class, 'poem'])->name('poems');
Route::get('/stories', [FrontendlayoutController::class, 'stories'])->name('stories');
Route::get("post/{id}", [FrontendController::class, 'post'])->name('post');
Route::post("comment", [FrontendController::class, 'commentStore'])->name('comment.store');
Route::post("like", [FrontendController::class, 'likeStore'])->name('like.store');
Route::get('search', [FrontendController::class, 'search'])->name('search');


Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('article', UserPostController::class)->names(['article']);
    Route::resource('cart', CartController::class)->names(['cart']);
    Route::post('description', [FrontendController::class, 'description'])->name('description');
});

require __DIR__ . '/auth.php';

Route::get('/admin/dashboard',[AdminDashboardController::class,'adminDashboard'])->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::middleware('auth:admin')->group(function () {
   Route::resource('/admin/profile',AdminProfileController::class)->names(['userProfile']);
    Route::resource('/admin/company', CompanyController::class)->names(['company']);
    Route::resource('/admin/category', CategoryController::class)->names(['category']);
    Route::resource('/admin/paymentcategory', PaymentCategoryController::class)->names(['paymentcategory']);
    Route::resource('/admin/type', TypeController::class)->names(['type']);
    Route::resource('/admin/user', UserController::class)->names(['user']);
    Route::resource('/admin/about', AboutController::class)->names(['about']);
    Route::resource('/admin/post', PostController::class)->names(['post']);
    Route::resource('/admin/feedback', FeedbackController::class)->names(['feedback']);
    Route::get('sales', [FrontendController::class, 'getMySale'])->name('sales');
});

require __DIR__ . '/adminauth.php';

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');

Route::post('/khalti/payment/verify', [PaymentController::class, 'verifyPayment'])->name('khalti.verifyPayment');
Route::post('/khalti/payment/store', [PaymentController::class, 'storePayment'])->name('khalti.storePayment');
