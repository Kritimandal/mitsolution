<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('homepage');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('homepage');
Route::get('/contact-us', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact-us');
Route::post('/contact-store', [App\Http\Controllers\ContactController::class, 'store'])->name('contact-store');

Route::get('/about-us', [App\Http\Controllers\FrontendController::class, 'about'])->name('about-us');
Route::get('/service', [App\Http\Controllers\FrontendController::class, 'service'])->name('service');
Route::get('/our-team', [App\Http\Controllers\FrontendController::class, 'team'])->name('our-team');
Route::get('/our-clients', [App\Http\Controllers\FrontendController::class, 'client'])->name('our-clients');
Route::get('/careers', [App\Http\Controllers\FrontendController::class, 'career'])->name('careers');
Route::get('/post/{post}', [App\Http\Controllers\FrontendController::class, 'post'])->name('post');
Route::get('/application-create', [App\Http\Controllers\ApplicationController::class, 'create'])->name('application-create');
Route::post('/application-store', [App\Http\Controllers\ApplicationController::class, 'store'])->name('application-store');
Route::get('/subcategory-post/{post}', [App\Http\Controllers\FrontendController::class, 'categorypost'])->name('subcategory-post');


Route::group(["middleware" => "auth"], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // for setting
    Route::get('/setting-create', [App\Http\Controllers\SettingController::class, 'create'])->name('setting-create');
    Route::get('/setting-index', [App\Http\Controllers\SettingController::class, 'index'])->name('setting-index');
    Route::post('/setting-store', [App\Http\Controllers\SettingController::class, 'store'])->name('setting-store');
    Route::get('/setting-edit/{setting}', [App\Http\Controllers\SettingController::class, 'edit'])->name('setting-edit');
    Route::post('/setting-update/{setting}', [App\Http\Controllers\SettingController::class, 'update'])->name('setting-update');
    Route::get('/setting-delete/{setting}', [App\Http\Controllers\SettingController::class, 'destroy'])->name('setting-delete');

    // for client
    Route::get('/client-create', [App\Http\Controllers\ClientController::class, 'create'])->name('client-create');
    Route::get('/client-index', [App\Http\Controllers\ClientController::class, 'index'])->name('client-index');
    Route::post('/client-store', [App\Http\Controllers\ClientController::class, 'store'])->name('client-store');
    Route::get('/client-edit/{client}', [App\Http\Controllers\ClientController::class, 'edit'])->name('client-edit');
    Route::post('/client-update/{client}', [App\Http\Controllers\ClientController::class, 'update'])->name('client-update');
    Route::get('/client-delete/{client}', [App\Http\Controllers\ClientController::class, 'destroy'])->name('client-delete');

    // for contact
    Route::get('/contact-create', [App\Http\Controllers\ContactController::class, 'create'])->name('contact-create');
    Route::get('/contact-index', [App\Http\Controllers\ContactController::class, 'index'])->name('contact-index');
    
    Route::get('/contact-edit/{contact}', [App\Http\Controllers\ContactController::class, 'edit'])->name('contact-edit');
    Route::post('/contact-update/{contact}', [App\Http\Controllers\ContactController::class, 'update'])->name('contact-update');
    Route::get('/contact-delete/{contact}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contact-delete');

    // for category
    Route::get('/category-create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category-create');
    Route::get('/category-index', [App\Http\Controllers\CategoryController::class, 'index'])->name('category-index');
    Route::post('/category-store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category-store');
    Route::get('/category-edit/{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category-edit');
    Route::post('/category-update/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category-update');
    Route::get('/category-delete/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category-delete');

    // for banner
    Route::get('/banner-create', [App\Http\Controllers\BannerController::class, 'create'])->name('banner-create');
    Route::get('/banner-index', [App\Http\Controllers\BannerController::class, 'index'])->name('banner-index');
    Route::post('/banner-store', [App\Http\Controllers\BannerController::class, 'store'])->name('banner-store');
    Route::get('/banner-edit/{banner}', [App\Http\Controllers\BannerController::class, 'edit'])->name('banner-edit');
    Route::post('/banner-update/{banner}', [App\Http\Controllers\BannerController::class, 'update'])->name('banner-update');
    Route::get('/banner-delete/{banner}', [App\Http\Controllers\BannerController::class, 'destroy'])->name('banner-delete');

    // for post
    Route::get('/post-create', [App\Http\Controllers\PostController::class, 'create'])->name('post-create');
    Route::get('/post-index', [App\Http\Controllers\PostController::class, 'index'])->name('post-index');
    Route::post('/post-store', [App\Http\Controllers\PostController::class, 'store'])->name('post-store');
    Route::get('/post-edit/{post}', [App\Http\Controllers\PostController::class, 'edit'])->name('post-edit');
    Route::post('/post-update/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('post-update');
    Route::get('/post-delete/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post-delete');

    // for subcategory
    Route::get('/subcategory-create', [App\Http\Controllers\SubCategoryController::class, 'create'])->name('subcategory-create');
    Route::get('/subcategory-index', [App\Http\Controllers\SubCategoryController::class, 'index'])->name('subcategory-index');
    Route::post('/subcategory-store', [App\Http\Controllers\SubCategoryController::class, 'store'])->name('subcategory-store');
    Route::get('/subcategory-edit/{subCategory}', [App\Http\Controllers\SubCategoryController::class, 'edit'])->name('subcategory-edit');
    Route::post('/subcategory-update/{subCategory}', [App\Http\Controllers\SubCategoryController::class, 'update'])->name('subcategory-update');
    Route::get('/subcategory-delete/{subCategory}', [App\Http\Controllers\SubCategoryController::class, 'destroy'])->name('subcategory-delete');

    // for testimonial
    Route::get('/testimonial-create', [App\Http\Controllers\TestimonialController::class, 'create'])->name('testimonial-create');
    Route::get('/testimonial-index', [App\Http\Controllers\TestimonialController::class, 'index'])->name('testimonial-index');
    Route::post('/testimonial-store', [App\Http\Controllers\TestimonialController::class, 'store'])->name('testimonial-store');
    Route::get('/testimonial-edit/{testimonial}', [App\Http\Controllers\TestimonialController::class, 'edit'])->name('testimonial-edit');
    Route::post('/testimonial-update/{testimonial}', [App\Http\Controllers\TestimonialController::class, 'update'])->name('testimonial-update');
    Route::get('/testimonial-delete/{testimonial}', [App\Http\Controllers\TestimonialController::class, 'destroy'])->name('testimonial-delete');
    
    // for boardmember
    Route::get('/boardmember-create', [App\Http\Controllers\BoardMemberController::class, 'create'])->name('boardmember-create');
    Route::get('/boardmember-index', [App\Http\Controllers\BoardMemberController::class, 'index'])->name('boardmember-index');
    Route::post('/boardmember-store', [App\Http\Controllers\BoardMemberController::class, 'store'])->name('boardmember-store');
    Route::get('/boardmember-edit/{boardMember}', [App\Http\Controllers\BoardMemberController::class, 'edit'])->name('boardmember-edit');
    Route::post('/boardmember-update/{boardMember}', [App\Http\Controllers\BoardMemberController::class, 'update'])->name('boardmember-update');
    Route::get('/boardmember-delete/{boardMember}', [App\Http\Controllers\BoardMemberController::class, 'destroy'])->name('boardmember-delete');
    
    Route::get('/technology-create', [App\Http\Controllers\TechnologyController::class, 'create'])->name('technology-create');
    Route::get('/technology-index', [App\Http\Controllers\TechnologyController::class, 'index'])->name('technology-index');
    Route::post('/technology-store', [App\Http\Controllers\TechnologyController::class, 'store'])->name('technology-store');
    Route::get('/technology-edit/{technology}', [App\Http\Controllers\TechnologyController::class, 'edit'])->name('technology-edit');
    Route::post('/technology-update/{technology}', [App\Http\Controllers\TechnologyController::class, 'update'])->name('technology-update');
    Route::get('/technology-delete/{technology}', [App\Http\Controllers\TechnologyController::class, 'destroy'])->name('technology-delete');

    Route::get('/project-create', [App\Http\Controllers\ProjectsController::class, 'create'])->name('project-create');
    Route::get('/project-index', [App\Http\Controllers\ProjectsController::class, 'index'])->name('project-index');
    Route::post('/project-store', [App\Http\Controllers\ProjectsController::class, 'store'])->name('project-store');
    Route::get('/project-edit/{project}', [App\Http\Controllers\ProjectsController::class, 'edit'])->name('project-edit');
    Route::post('/project-update/{project}', [App\Http\Controllers\ProjectsController::class, 'update'])->name('project-update');
    Route::get('/project-delete/{project}', [App\Http\Controllers\ProjectsController::class, 'destroy'])->name('project-delete');

    Route::get('/tag-create', [App\Http\Controllers\TagController::class, 'create'])->name('tag-create');
    Route::get('/tag-index', [App\Http\Controllers\TagController::class, 'index'])->name('tag-index');
    Route::post('/tag-store', [App\Http\Controllers\TagController::class, 'store'])->name('tag-store');
    Route::get('/tag-edit/{tag}', [App\Http\Controllers\TagController::class, 'edit'])->name('tag-edit');
    Route::post('/tag-update/{tag}', [App\Http\Controllers\TagController::class, 'update'])->name('tag-update');
    Route::get('/tag-delete/{tag}', [App\Http\Controllers\TagController::class, 'destroy'])->name('tag-delete');

    Route::get('/application-index', [App\Http\Controllers\ApplicationController::class, 'index'])->name('application-index');
    Route::get('/application-delete', [App\Http\Controllers\ApplicationController::class, 'destroy'])->name('application-delete');
    Route::get('/application-download/{filename}', [App\Http\Controllers\ApplicationController::class, 'download'])->name('application-download');

});
