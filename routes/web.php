<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\WorkingController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\FormContactController;
use App\Http\Controllers\SosialController;
use App\Http\Controllers\HomeResumeController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\BlogUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\WhyCourseController;
use App\Http\Controllers\GambarWhyCourseController;
use App\Http\Controllers\OurCourseController;
use App\Http\Controllers\KategoriCourseController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\TutorialUserController;
use App\Http\Controllers\OurCourseUserController;
use App\Http\Controllers\KategoriTutorialController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\PageTitleController;
use App\Http\Controllers\MetaManagementController;
use App\Http\Controllers\TestimonialPengajarController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GalleryUserController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\KategoriGalleryController;
use App\Http\Controllers\BlogHomeUserController;
use App\Http\Controllers\SubKategoriTutorialController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/panel', [LoginController::class, 'index'])->name('panel')->middleware('guest');
Route::post('/panel', [LoginController::class, 'authentication'])->name('authentication');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login', [LoginUserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginUserController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [LoginUserController::class, 'logout'])->name('logout');

Route::resource('dashboard', DashboardController::class)->middleware('auth');
Route::resource('leaderboard', LeaderboardController::class)->middleware('auth');

//User Resume
Route::resource('usermanagement', UserManagementController::class)->middleware('auth');
Route::resource('konfigurasi', KonfigurasiController::class)->middleware('auth');
Route::resource('resumee', ResumeController::class)->middleware('auth');
Route::resource('service', ServiceController::class)->middleware('auth');
Route::resource('skill', SkillController::class)->middleware('auth');
Route::resource('working', WorkingController::class)->middleware('auth');
Route::resource('education', EducationController::class)->middleware('auth');
Route::resource('client', ClientController::class)->middleware('auth');
Route::resource('testimonial', TestimonialController::class)->middleware('auth');
Route::resource('testipengajar', TestimonialPengajarController::class)->middleware('auth');
Route::resource('portfolio', PortfolioController::class)->middleware('auth');
Route::resource('blog', BlogController::class)->middleware('auth');
Route::resource('sosial', SosialController::class)->middleware('auth');
Route::resource('profile', ProfileController::class)->middleware('auth');
Route::resource('tutorial', TutorialController::class)->middleware('auth');
Route::resource('kategoritutorial', KategoriTutorialController::class)->middleware('auth');
Route::resource('subkategoritutorial', SubKategoriTutorialController::class)->middleware('auth');
Route::get('getSubKategori/{id}', [TutorialController::class, 'getSubKategori'])->middleware('auth');

//Admin Backend
Route::resource('banner', BannerController::class)->middleware(['auth', 'superadmin']);
Route::resource('whycourse', WhyCourseController::class)->middleware(['auth', 'superadmin']);
Route::resource('gambarwhycourse', GambarWhyCourseController::class)->middleware(['auth', 'superadmin']);
Route::resource('ourcourse', OurCourseController::class)->middleware(['auth', 'superadmin']);
Route::resource('usermanagement', UserManagementController::class)->middleware(['auth', 'superadmin']);
Route::resource('konfigurasi', KonfigurasiController::class)->middleware(['auth', 'superadmin']);
Route::resource('kategoricourse', KategoriCourseController::class)->middleware(['auth', 'superadmin']);
Route::resource('contactus', ContactUsController::class)->middleware(['auth', 'superadmin']);
Route::resource('pagetitle', PageTitleController::class)->middleware(['auth', 'superadmin']);
Route::resource('contactform', FormContactController::class)->middleware(['auth', 'superadmin']);
Route::resource('metamanagement', MetaManagementController::class)->middleware(['auth', 'superadmin']);
Route::resource('gallery', GalleryController::class)->middleware(['auth', 'superadmin']);
Route::resource('partner', PartnerController::class)->middleware(['auth', 'superadmin']);
Route::resource('kategorigallery', KategoriGalleryController::class)->middleware(['auth', 'superadmin']);

//Landing Page and CV Output
Route::resource('/', HomeResumeController::class);
Route::resource('cv', CVController::class);
Route::resource('blogs', BlogUserController::class);
Route::resource('contact', ContactUsFormController::class);
Route::resource('tutorials', TutorialUserController::class);
Route::resource('courses', OurCourseUserController::class);
Route::resource('galleries', GalleryUserController::class);
Route::resource('blogger', BlogHomeUserController::class);
Route::get('detail/{slug}', [TutorialUserController::class, 'detail'])->name('tutorials.detail');
Route::get('intro/{kategori_name}', [TutorialUserController::class, 'intro'])->name('tutorials.intro');

Route::get('download/{user_id}', [CVController::class, "download"])->name('cv.download');
Route::post('testi_store', [CVController::class, "testi_store"])->name('cv.testi_store');
Route::get('status/{id}', [TestimonialController::class, "status"])->name('testimonial.status');
Route::get('show_pengajar/{slug}', [CVController::class, "show_pengajar"])->name('cv.show_pengajar');
Route::get('blog_pengajar/{slug}', [BlogUserController::class, "blog_pengajar"])->name('blogs.blog_pengajar');

Route::delete('/selected-testimonial', [TestimonialController::class, 'deleteCheckedTestimonial'])->name('testimonial.deleteSelected');
Route::delete('/selected-portfolio', [PortfolioController::class, 'deleteCheckedPortfolio'])->name('portfolio.deleteSelected');
Route::delete('/selected-blog', [BlogController::class, 'deleteCheckedBlog'])->name('blog.deleteSelected');
Route::delete('/selected-education', [EducationController::class, 'deleteCheckedEducation'])->name('education.deleteSelected');
Route::delete('/selected-working', [WorkingController::class, 'deleteCheckedWorking'])->name('working.deleteSelected');
Route::delete('/selected-skill', [SkillController::class, 'deleteCheckedSkill'])->name('skill.deleteSelected');
Route::delete('/selected-service', [ServiceController::class, 'deleteCheckedService'])->name('service.deleteSelected');
Route::delete('/selected-sosial', [SosialController::class, 'deleteCheckedSosial'])->name('sosial.deleteSelected');
Route::delete('/selected-tutorial', [TutorialController::class, 'deleteCheckedTutorial'])->name('tutorial.deleteSelected');
