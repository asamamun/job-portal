<?php

use App\Http\Controllers\Admin\AdvertisementController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\WithdrawController as AdminWithdrawController;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\FunctionalController;
use App\Http\Controllers\Admin\IndustrialController;
use App\Http\Controllers\Admin\SpecialController;
use App\Http\Controllers\Admin\PostTypeController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SkillTypeController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\employer\DashboardController as EmployerDashboardController;
use App\Http\Controllers\employer\PostController;
use App\Http\Controllers\Applicant\ProfileController as ApplicantProfileController;
use App\Http\Controllers\Applicant\PostController as ApplicantPostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\applicant\ApplyController;
use App\Http\Controllers\Applicant\EducationController;
use App\Http\Controllers\Applicant\ExperienceController;
use App\Http\Controllers\Applicant\ExamController;
use App\Http\Controllers\Applicant\LanguageController;
use App\Http\Controllers\Applicant\LinkController;
use App\Http\Controllers\Applicant\ProjectController;
use App\Http\Controllers\Applicant\ReferenceController;
use App\Http\Controllers\Applicant\SkillController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\ResumeController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Applicant;
use App\Http\Middleware\Employer;
use App\Http\Middleware\PostCheck;
use App\Http\Middleware\ExamCheck;
use App\Http\Middleware\ApplyCheck;
use Illuminate\Support\Facades\Route;


//every on access this link
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::prefix('post')->group(function () {
    Route::get('/all', [FrontendController::class, 'all'])->name('post.all');
    Route::get('/single/{id}', [FrontendController::class, 'single'])->name('post.single');
    Route::get('/functional/{id}', [FrontendController::class, 'functional'])->name('functional.category');
    Route::get('/industrial/{id}', [FrontendController::class, 'industrial'])->name('industrial.category');
    Route::get('/special/{id}', [FrontendController::class, 'special'])->name('special.category');
    Route::get('/emp/all/{id}', [FrontendController::class, 'employer'])->name('emp.all');
    Route::post('search', [FrontendController::class, 'search'])->name('search');
});
//result
Route::get('result/page/{id}', [ExamController::class, 'resultPage'])->name('result.page');

//Withdraw
Route::get('/withdraw', [WithdrawController::class, 'index'])->name('withdraw');
Route::post('/withdraw/store', [WithdrawController::class, 'store'])->name('withdraw.store');

//cv
Route::get('/cv/{id}', [ResumeController::class, 'index'])->name('cv');
Route::get('/cv/download/{id}', [ResumeController::class, 'download'])->name('cv.download');
//cvpro
Route::get('/cv/cvpro/{id}', [ResumeController::class, 'indexcv'])->name('cvpro');
Route::get('/cv/cvpro/download/{id}', [ResumeController::class, 'downloadcv'])->name('cvpro.download');
//cvdark
Route::get('/cv/dark/{id}', [ResumeController::class, 'indexdark'])->name('dark');
Route::get('/cv/dark/download/{id}', [ResumeController::class, 'downloaddark'])->name('dark.download');
//cvdark
Route::get('/cv/cvsimple/{id}', [ResumeController::class, 'indexsimple'])->name('simple');
Route::get('/cv/cvsimple/download/{id}', [ResumeController::class, 'downloadsimple'])->name('simple.download');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware([Admin::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('settings', SettingController::class);
    Route::resource('functional', FunctionalController::class);
    Route::resource('industrial', IndustrialController::class);
    Route::resource('special', SpecialController::class);
    Route::resource('skill_type', SkillTypeController::class);
    Route::resource('post_type', PostTypeController::class);
    Route::resource('country', CountryController::class);
    Route::resource('state', StateController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('question', QuestionController::class);
    Route::resource('advertisement', AdvertisementController::class);
    Route::resource('carousel', CarouselController::class);

    // Withdraw
    Route::get('/withdraw/all', [AdminWithdrawController::class, 'index'])->name('withdraw.all');
    Route::get('/withdraw/request/page', [AdminWithdrawController::class, 'requestPage'])->name('withdraw.request.page');
    Route::get('/withdraw/approve/page', [AdminWithdrawController::class, 'approvePage'])->name('withdraw.approve.page');
    Route::get('/withdraw/approve/{id}', [AdminWithdrawController::class, 'approve'])->name('withdraw.approve');
    Route::get('/withdraw/reject/page', [AdminWithdrawController::class, 'rejectPage'])->name('withdraw.reject.page');
    Route::get('/withdraw/reject/{id}', [AdminWithdrawController::class, 'reject'])->name('withdraw.reject');

    //Reports
    Route::get('/reports/search', [ReportController::class, 'searchReportsPage'])->name('reports.search');
    Route::get('/reports/daily', [ReportController::class, 'showDailyReports'])->name('reports.daily');

    //chart
    Route::get('/monthly-chart', [ChartController::class, 'monthlyIncomeExpense']);
    Route::get('/daily-chart', [ChartController::class, 'dailyIncomeExpense']);
});
Route::middleware([Employer::class])->prefix('employer')->group(function () {
    Route::get('/dashboard', [EmployerDashboardController::class, 'index'])->name('employer.dashboard');
    Route::resource('posts', PostController::class)->only(['create'])->middleware(PostCheck::class);
    Route::resource('posts', PostController::class)->except(['create']);
});

Route::middleware([Applicant::class])->prefix('applicant')->group(function () {

    //profile
    Route::get('profile', [ApplicantProfileController::class, 'index'])->name('applicant.profile');
    Route::put('/profile/update/', [ApplicantProfileController::class, 'update'])->name('applicant.profile.update');

    Route::put('/update/image', [ApplicantProfileController::class, 'imageUpdate'])->name('applicant.update.image');
    Route::put('/update', [ApplicantProfileController::class, 'update'])->name('applicant.update');
    Route::resource('experience', ExperienceController::class);
	Route::get('exam', [ExamController::class, 'examPage'])->middleware(ExamCheck::class);
    Route::resource('experience', ExperienceController::class);
    Route::resource('education', EducationController::class);
    Route::resource('reference', ReferenceController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('language',LanguageController::class);
    Route::resource('link',LinkController::class);
    Route::resource('skill',SkillController::class);

    //result
	Route::post('result', [ExamController::class, 'examResult']);
	Route::get('apply/{id}', [ApplyController::class, 'apply'])->middleware(ApplyCheck::class);
    //post
	Route::get('post/{id}', [ApplicantPostController::class, 'save'])->name('post.save');
    Route::get('post/delete/{id}', [ApplicantPostController::class, 'delete'])->name('post.delete');



    //Email for cv link
    Route::get('/send/page/', [EmailController::class, 'cvPage'])->name('send.page');
    Route::post('/send/cv/', [EmailController::class, 'cvLink'])->name('send.cv');
});


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

#invoice
Route::get('/invoice/{tid}', [InvoiceController::class, 'invoice'])->name('invoice');



#Ajax
Route::prefix('ajax')->group(function(){
    Route::get('/state/{country_id}', [AjaxController::class, 'stateAjax']);
    Route::get('/post/cat', [AjaxController::class, 'postCatAjax']);
});

#Ckeditor
Route::get('ckeditor', [CkeditorController::class, 'index']);
Route::post('ckeditor/upload', [CkeditorController::class, 'upload'])->name('ckeditor.upload');

require __DIR__.'/auth.php';
