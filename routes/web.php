<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\VisionController;
use App\Http\Controllers\FocusController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\TestimonialController;

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about_us');
Route::get('/team-member', [FrontendController::class, 'team'])->name('team_member');
Route::get('/advisory-member', [FrontendController::class, 'advisory'])->name('advisory_member');
Route::get('/focus-point', [FrontendController::class, 'focus_point'])->name('focus_point');
Route::get('/event-all', [FrontendController::class, 'event_all'])->name('event_all');
Route::get('/event-single/{id}', [FrontendController::class, 'event_single'])->name('event_single');
Route::get('/blog-all', [FrontendController::class, 'blog_all'])->name('blog_all');
Route::get('/dashboard',[HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/blog-single/{id}', [FrontendController::class, 'blog_single'])->name('blog_single');
Route::get('/contact-us', [FrontendController::class, 'contact_us'])->name('contact_us');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::resources([
        'hero' => HeroController::class,
        'logo' => LogoController::class,
        'about' => AboutController::class,
        'mission' => MissionController::class,
        'vision' => VisionController::class,
        'focus'  => FocusController::class,
        'event'  => EventController::class,
        'blog'  => BlogController::class,
        'team'  => TeamController::class,
        'social'  => SocialController::class,
        'general'  => GeneralController::class,
        'partner'  => PartnerController::class,
        'testimonial'  => TestimonialController::class,
    ]);

});

require __DIR__.'/auth.php';
