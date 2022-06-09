<?php

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

use App\Http\Controllers\AdminControllers\DashboardController;
use App\Http\Controllers\AdminControllers\AdminPostsController;
use App\Http\Controllers\AdminControllers\TinyMCEController;
use App\Http\Controllers\AdminControllers\AdminCategoriesController;
use App\Http\Controllers\AdminControllers\AdminTagsController;
use App\Http\Controllers\AdminControllers\AdminCommentsController;
use App\Http\Controllers\AdminControllers\AdminRolesController;
use App\Http\Controllers\AdminControllers\AdminUsersController;
use App\Http\Controllers\AdminControllers\AdminContactsController;
use App\Http\Controllers\AdminControllers\AdminSettingController;
use App\Http\Controllers\AdminControllers\AdminDonateController;
use App\Http\Controllers\AdminControllers\AdminHomeController;
use App\Http\Controllers\AdminControllers\AdminFooterController;
use App\Http\Controllers\AdminControllers\AdminVolunteerController;
use App\Http\Controllers\BrandonController;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\donateconfirmation;
use App\Http\Controllers\BlogController;

// Front User Routes

Route::get('/', [HomeController::class, 'index'])->name('home');
// volunteer
Route::get('/volunteer', [VolunteerController::class, 'create_volunteer'])->name('volunteer.create');
Route::post('/volunteer', [VolunteerController::class, 'store_volunteer'])->name('volunteer.store');
// volunteer ends
Route::get('/donate', [DonateController::class, 'donate'])->name('donate');
Route::get('/donate/confirmation', [donateconfirmation::class, 'donateconfirmation'])->name('donateconfirmation');

Route::get('/donatee', [DonateController::class, 'index']);
Route::post('donatee/payment', [DonateController::class, 'payment'])->name('donate.payment');
// little kid end

Route::post('/create', [DonateController::class, 'create']);
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

// // Paypal Donation Form
// Route::get( 'donation-form',  [ DonationController::class, 'donationForm' ] );
// Route::get( 'donation/success',  [ DonationController::class, 'donationSuccess' ] )->name('donation.success');
// Route::get( 'donation/cancelled',  [ DonationController::class, 'donationCancelled' ] )->name('donation.cancelled');
// Route::get( 'donation/notify_url',  [ DonationController::class, 'donationNotify' ] )->name('donation.notify');

Route::get('/posts/{post:slug}', [PostsController::class, 'show'])->name('posts.show');
Route::post('/posts/{post:slug}', [PostsController::class, 'addComment'])->name('posts.add_comment');

Route::get('/about', AboutController::class)->name('about');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/tags/{tag:name}', [TagController::class, 'show'])->name('tags.show');

require __DIR__.'/auth.php';

// Admin Dashboard Routes

Route::name('admin.')->prefix('admin')->middleware(['auth', 'check_permissions'])->group(function(){

    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::post('upload_tinymce_image', [TinyMCEController::class, 'upload_tinymce_image'])->name('upload_tinymce_image');

    Route::resource('posts', AdminPostsController::class);
    Route::resource('categories', AdminCategoriesController::class);
    Route::resource('tags', AdminTagsController::class)->only(['index', 'show', 'destroy']);
    Route::resource('comments', AdminCommentsController::class)->except('show');

    Route::resource('roles', AdminRolesController::class)->except('show');
    Route::resource('users', AdminUsersController::class);

    Route::get('contacts', [AdminContactsController::class, 'index'])->name('contacts');
    Route::delete('contacts/{contact}', [AdminContactsController::class, 'destroy'])->name('contacts.destroy');

    // volunteer
    Route::get('volunteer', [AdminVolunteerController::class, 'index'])->name('volunteer');
    Route::delete('volunteer/{volunteer}', [AdminVolunteerController::class, 'destroy'])->name('volunteer.destroy');


    Route::get('about', [AdminSettingController::class, 'edit'])->name('setting.edit');
    Route::post('about', [AdminSettingController::class, 'update'])->name('setting.update');

    Route::get('donate', [AdminDonateController::class, 'edit'])->name('donate.edit');
    Route::post('donate', [AdminDonateController::class, 'update'])->name('donate.update');

    Route::get('home', [AdminHomeController::class, 'edit'])->name('home.edit');
    Route::post('home', [AdminHomeController::class, 'update'])->name('home.update');

    Route::get('footer', [AdminFooterController::class, 'edit'])->name('footer.edit');
    Route::post('footer', [AdminFooterController::class, 'update'])->name('footer.update');
});

Route::get('/brandon', [BrandonController::class, 'index'])->name('brandon.index');