<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes(['register' => false, 'confirm' => false, 'verify' => false]);

// Routes for frontend
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Route::get('/news', [App\Http\Controllers\Frontend\PageController::class, 'news'])->name('news');
Route::get('/event', [App\Http\Controllers\Frontend\PageController::class, 'event'])->name('event');
Route::get('/blog', [App\Http\Controllers\Frontend\PageController::class, 'blog'])->name('blog');
Route::get('/news/details/{id}/{title}', [App\Http\Controllers\Frontend\PageController::class, 'newsDetails'])->name('news.details');
Route::get('/event/details/{id}/{title}', [App\Http\Controllers\Frontend\PageController::class, 'eventDetails'])->name('event.details');
Route::get('/blog/details/{id}/{title}', [App\Http\Controllers\Frontend\PageController::class, 'blogDetails'])->name('blog.details');
Route::get('/project/{id}/{type}', [App\Http\Controllers\Frontend\PageController::class, 'project'])->name('project');
Route::get('/project-details/{id}/{title}', [App\Http\Controllers\Frontend\PageController::class, 'projectDetails'])->name('project.details');
// Service
Route::get('/service', [App\Http\Controllers\Frontend\PageController::class, 'service'])->name('service');
Route::get('/service-details/{id}/{title}', [App\Http\Controllers\Frontend\PageController::class, 'serviceDetails'])->name('service.details');
Route::get('/land-owner', [App\Http\Controllers\Frontend\PageController::class, 'landOwner'])->name('land.owner');
Route::get('/client-requirements', [App\Http\Controllers\Frontend\PageController::class, 'clientRequirements'])->name('client.requirements');
Route::get('/contact-us', [App\Http\Controllers\Frontend\PageController::class, 'contactUs'])->name('contact.us');
Route::get('/about-us/{id}/{title}', [App\Http\Controllers\Frontend\PageController::class, 'aboutUs'])->name('about.us');
Route::get('/career', [App\Http\Controllers\Frontend\PageController::class, 'career'])->name('career');
Route::get('/career-details/{id}/{title}', [App\Http\Controllers\Frontend\PageController::class, 'careerDetails'])->name('career.details');
Route::post('/contact-us', [App\Http\Controllers\Frontend\PageController::class, 'storeContactUs'])->name('contact.us.store');
Route::post('/client-requirements', [App\Http\Controllers\Frontend\PageController::class, 'storeClientRequirement'])->name('client.requirement.store');
Route::post('/land-owner', [App\Http\Controllers\Frontend\PageController::class, 'storelandOwner'])->name('land.owner.store');
Route::post('/booking', [App\Http\Controllers\Frontend\PageController::class, 'projectBooking'])->name('booking.store');
Route::post('/career/contact', [App\Http\Controllers\Frontend\PageController::class, 'careerContact'])->name('career.contact.store');

// Routes for backend
Route::group(['as'=>'admin.', 'prefix'=>'admin', 'middleware'=>['auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [App\Http\Controllers\Backend\UserController::class, 'profile'])->name('profile');
    Route::post('/profile/update', [App\Http\Controllers\Backend\UserController::class, 'updateProfile'])->name('profile.update');
    Route::get('/change-password', [App\Http\Controllers\Backend\ChangePasswordController::class, 'index'])->name('change.password');
    Route::post('/password/update', [App\Http\Controllers\Backend\ChangePasswordController::class, 'update'])->name('password.update');

    Route::resource('user', App\Http\Controllers\Backend\UserController::class);
    Route::resource('category', App\Http\Controllers\Backend\CategoryController::class);
    Route::resource('type', App\Http\Controllers\Backend\TypeController::class);
    Route::resource('specification', App\Http\Controllers\Backend\SpecificationController::class);
    Route::resource('news', App\Http\Controllers\Backend\NewsController::class);
    Route::resource('event', App\Http\Controllers\Backend\EventController::class);
    Route::resource('blog', App\Http\Controllers\Backend\BlogController::class);
    Route::resource('testimonial', App\Http\Controllers\Backend\TestimonialController::class);
    Route::resource('career', App\Http\Controllers\Backend\CareerController::class);
    Route::resource('about', App\Http\Controllers\Backend\AboutUsController::class);
    Route::resource('slider', App\Http\Controllers\Backend\SliderController::class);
    Route::resource('project', App\Http\Controllers\Backend\ProjectController::class);
    Route::resource('setting', App\Http\Controllers\Backend\SettingController::class);
    Route::resource('why-choose-us', App\Http\Controllers\Backend\WhyChooseUsController::class);
    // Add
    Route::resource('team', App\Http\Controllers\Backend\TeamController::class);
    Route::resource('serviceCategory', App\Http\Controllers\Backend\ServiceCategoryController::class);
    Route::resource('service', App\Http\Controllers\Backend\ServiceController::class);
    Route::resource('partner', App\Http\Controllers\Backend\PartnerController::class);

    Route::get('client-requirement/{clientRequirement}', [App\Http\Controllers\Backend\ClientRequirementController::class, 'updateStatus'])->name('client-requirement.status.update');
    Route::get('client-requirement', [App\Http\Controllers\Backend\ClientRequirementController::class, 'index'])->name('client-requirement.index');

    Route::get('land-owner/status-update/{landOwner}', [App\Http\Controllers\Backend\LandOwnerController::class, 'updateStatus'])->name('land-owner.status.update');
    Route::get('land-owner', [App\Http\Controllers\Backend\LandOwnerController::class, 'index'])->name('land-owner.index');

    Route::get('feedback/status-update/{feedback}', [App\Http\Controllers\Backend\FeedbackController::class, 'updateStatus'])->name('feedback.status.update');
    Route::get('feedback', [App\Http\Controllers\Backend\FeedbackController::class, 'index'])->name('feedback.index');

    Route::get('booking/status-update/{booking}', [App\Http\Controllers\Backend\BookingController::class, 'updateStatus'])->name('booking.status.update');
    Route::get('booking', [App\Http\Controllers\Backend\BookingController::class, 'index'])->name('booking.index');
    // Career Contact
    Route::get('career/contact/info', [App\Http\Controllers\Backend\CareerContactController::class, 'index'])->name('career.contact.index');
    Route::get('career/contact/status-update/{careerContact}', [App\Http\Controllers\Backend\CareerContactController::class, 'updateStatus'])->name('career.contact.status.update');

    Route::post('news/file-upload', [App\Http\Controllers\Backend\NewsController::class, 'fileUpload'])->name('news.file.Upload');
    Route::post('event/file-upload', [App\Http\Controllers\Backend\EventController::class, 'fileUpload'])->name('event.file.Upload');
    Route::post('blog/file-upload', [App\Http\Controllers\Backend\BlogController::class, 'fileUpload'])->name('blog.file.Upload');
    Route::post('about/file-upload', [App\Http\Controllers\Backend\AboutUsController::class, 'fileUpload'])->name('about.file.Upload');
    Route::post('project/file-upload', [App\Http\Controllers\Backend\ProjectController::class, 'fileUpload'])->name('project.file.Upload');
    Route::post('service/file-upload', [App\Http\Controllers\Backend\ServiceController::class, 'fileUpload'])->name('service.file.Upload');

    Route::get('project/specification/{project}', [App\Http\Controllers\Backend\ProjectController::class, 'createProjectSpecification'])->name('project.specification');
    Route::post('project/specification/store/{project}', [App\Http\Controllers\Backend\ProjectController::class, 'storeProjectSpecification'])->name('project.specification.store');
    
    Route::get('project/photo/{project}', [App\Http\Controllers\Backend\ProjectController::class, 'createProjectPhoto'])->name('project.photo');
    Route::post('project/photo/store/{project}', [App\Http\Controllers\Backend\ProjectController::class, 'storeProjectPhoto'])->name('project.photo.store');
    
    Route::get('project/details/{project}', [App\Http\Controllers\Backend\ProjectController::class, 'projectDetails'])->name('project.details');
    Route::get('project/photo/destroy/{id}', [App\Http\Controllers\Backend\ProjectController::class, 'destroyProjectPhoto'])->name('project.photo.destroy');
});
