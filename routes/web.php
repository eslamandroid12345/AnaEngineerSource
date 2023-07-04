<?php

use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ArticalController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

//Auth
//Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/handleregister', [App\Http\Controllers\AuthController::class, 'handleRegister'])->name('auth.handleRegister');
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
Route::post('/handleLogin', [App\Http\Controllers\AuthController::class, 'handleLogin'])->name('auth.handleLogin');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');

//auth google
Route::get('login/google', [\App\Http\Controllers\SocialAuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [\App\Http\Controllers\SocialAuthController::class, 'handleGoogleCallback']);

//login with Facebook
Route::get('login/facebook', [App\Http\Controllers\AuthController::class,'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\AuthController::class,'handleFacebookCallback']);


// forget password
Route::get('forget-password', [App\Http\Controllers\ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [App\Http\Controllers\ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [App\Http\Controllers\ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [App\Http\Controllers\ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// term and policy
Route::get('Terms&Conditions', [App\Http\Controllers\Front\TermAndPolicyController::class, 'showPageTermsAndConditions'])->name('term.index');
Route::get('Policy', [App\Http\Controllers\Front\TermAndPolicyController::class, 'showPagePolicy'])->name('policy.index');
Route::get('Common_Questions', [App\Http\Controllers\Front\TermAndPolicyController::class, 'showPageCommonQuestions'])->name('question.index');
Route::get('about_us', [App\Http\Controllers\Front\TermAndPolicyController::class, 'showPageAboutus'])->name('aboutus.index');
Route::get('contact_us', [App\Http\Controllers\Front\TermAndPolicyController::class, 'showPageContactUs'])->name('contact.index');
Route::Post('contact_us', [App\Http\Controllers\Front\TermAndPolicyController::class, 'StoreContactUs'])->name('contact.store');
Route::get('ourvision', [App\Http\Controllers\Front\TermAndPolicyController::class, 'showOurvisionPage'])->name('ourvision.index');
Route::get('jobs', [App\Http\Controllers\Front\TermAndPolicyController::class, 'showJobsPage'])->name('jobs.index');





Route::middleware('auth')->group(function(){

    Route::get('plans', [\App\Http\Controllers\PlanController::class, 'index'])->name('plans_page');
//    Route::get('plans/{plan}', [\App\Http\Controllers\PlanController::class, 'show'])->name("plans.show");
//    Route::post('subscription', [\App\Http\Controllers\PlanController::class, 'subscription'])->name("subscription.create");
//    Route::post('subscription', [App\Http\Controllers\PlanController::class, 'subscription'])->name("courses.pay");
    Route::get('course/{course}/enroll',[\App\Http\Controllers\Front\IndexController::class,'enroll'])->name('courses.enroll');

    //social media routes
    Route::get('socialmedia/{id}',[App\Http\Controllers\SocialMediaController::class,'profile'])->name('profile');
    Route::post('socialmedia/follow/user', [App\Http\Controllers\SocialMediaController::class,'flowUser'])->name('socialmedia.follow.user'); //added by eslam
    Route::get('socialmedia/unFollow/user', [App\Http\Controllers\SocialMediaController::class,'unFlowUser'])->name('socialmedia.unFollow.user'); //added by eslam
    //home page social
    Route::get('edit_profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('edit_profile');
    Route::PUT('update_profile', [App\Http\Controllers\ProfileController::class, 'update_profile'])->name('update_profile');
    Route::get('social/home', [App\Http\Controllers\SocialMediaController::class, 'homePage'])->name('social.home');
    Route::get('social/user/edit/{id}', [App\Http\Controllers\ProfileController::class, 'edit'])->name('edit.social');
    Route::get('social/user/edit/security/{id}', [App\Http\Controllers\ProfileController::class, 'editSecurity'])->name('edit.security.social');
    Route::post('/change-password',  [App\Http\Controllers\SocialMediaController::class, 'changePassword'])->name('change.password');
    //posts
    Route::get('addpost', [App\Http\Controllers\PostController::class,'create'])->name('add.post');
    Route::post('createpost_', [App\Http\Controllers\PostController::class, 'CreatePost'])->name('CreatePost');
    Route::get('editpost/{id}', [App\Http\Controllers\PostController::class,'edit'])->name('edit.post');
    Route::post('posteditdone/{id}', [App\Http\Controllers\PostController::class,'editPost'])->name('handel.edit.post');
    Route::delete('delete/post/{id}', [App\Http\Controllers\PostController::class,'delete'])->name('delete.post');
    //like and unlike
    Route::post('/like-post/{id}',[App\Http\Controllers\PostController::class,'likePost'])->name('like.post');
    Route::post('/unlike-post/{id}',[App\Http\Controllers\PostController::class,'unlikePost'])->name('unlike.post');
    Route::post('comment/delete',[App\Http\Controllers\PostController::class,'deleteCommentWithUser'])->name('comment.delete');
    Route::post('create.comment',[App\Http\Controllers\SocialMediaController::class,'store'])->name('comments.store');
    //courses
    Route::get('home/courses',[\App\Http\Controllers\Front\IndexController::class,'getAllCoursesInHome'])->name('home_elms');
    Route::get('allcourses',[\App\Http\Controllers\Front\IndexController::class,'allCourses'])->name('allcourses');
    Route::get('course/{id}',[\App\Http\Controllers\Front\IndexController::class,'detailsCourse'])->name('show.course')->middleware('auth');
    Route::get('handsa',[\App\Http\Controllers\Front\CategoryController::class,'index'])->name('handsa.index');
    //courses rate
    Route::delete('ratings/{id}', [App\Http\Controllers\RatingController::class, 'destroy'])->name('ratings.destroy');
    Route::delete('reviews/{id}', [App\Http\Controllers\ReviewController::class, 'destroy'])->name('reviews.destroy');
    Route::get('certificate', [App\Http\Controllers\CertificateController::class, 'userCertificate'])->name('certificate');

    Route::post('create.rating', [App\Http\Controllers\RatingController::class, 'store'])->name('ratings.store');
    Route::post('create.review', [App\Http\Controllers\ReviewController::class, 'store'])->name('reviews.store');

    //Magazine
    Route::get('magazines', [App\Http\Controllers\MagazineController::class, 'view_all_magazine'])->name('all.magazines');
    Route::get('Magazine/{slug}', [App\Http\Controllers\MagazineController::class, 'show'])->name('show.magazines')->middleware('subscribe');

    //article
    Route::get('artical', [\App\Http\Controllers\Front\ArticalController::class,'view_all_artical'])->name('all.artical')->middleware(['check.article.limit']);
    Route::get('artical/{slug}', [\App\Http\Controllers\Front\ArticalController::class, 'show_artical'])->name('show.artical')->middleware(['check.article.limit']);
    Route::get('Artical', [\App\Http\Controllers\Front\ArticalController::class, 'category_artical'])->name('articles.index');
    Route::get('Category', [\App\Http\Controllers\Front\ArticalController::class, 'category_search'])->name('category_search');

    //plans
    Route::get('plans/{plan}', [App\Http\Controllers\PlanController::class, 'show'])->name("plans.show");
    Route::get('payment/{id}', [StripePaymentController::class,'stripe'])->name('stripe.get');
    Route::post('payment', [StripePaymentController::class,'stripePost'])->name('stripe.post');




});

Route::middleware('isLoginAdmin')->group(function()
{



    //users
    Route::resource('portal/users',UserController::class);
    Route::get('portal/user/moderator', [App\Http\Controllers\UserController::class, 'moderator'])->name('users.moderator');

    //course
    Route::resource('portal/course',CourseController::class);
    Route::resource('portal/section',SectionController::class);
    Route::resource('portal/video',VideoController::class);
    Route::get('portal/student/enrollment', [App\Http\Controllers\EnrollmentController::class, 'dashboard'])->name('student');
    Route::get('/dashboard/{user}/{course}/approve', [App\Http\Controllers\EnrollmentController::class, 'approve'])->name('enrollment.approve');
    Route::get('/dashboard/{user}/{course}/disapprove', [App\Http\Controllers\EnrollmentController::class, 'disapprove'])->name('enrollment.disapprove');


    //terms and policy
//    Route::resource('portal/terms',TermController::class);
//    Route::resource('portal/policy',PolicyController::class);
    Route::get('portal', [App\Http\Controllers\DashboardController::class, 'counts'])->name('index.admin');

    //social media
    Route::get('portal/social/posts', [App\Http\Controllers\PostController::class, 'admin_posts'])->name('social.posts');
    Route::get('portal/social/delete/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('social.posts.delete');



    Route::get('portal/certificate', [App\Http\Controllers\CertificateController::class, 'allcertificate'])->name('allcertificate');
    Route::get('portal/certificate/add', [App\Http\Controllers\CertificateController::class, 'addcertficate'])->name('addcertficate');
    Route::post('portal/certificate/create/done', [App\Http\Controllers\CertificateController::class, 'uploadCertificate'])->name('add.done.certificate');
    Route::delete('portal/certificate/delete/{id}', [App\Http\Controllers\CertificateController::class, 'destroy'])->name('certificate.destroy');

});

Route::middleware('moderator')->group(function()
{

    //Magazine
    Route::get('portal/magazines', [App\Http\Controllers\MagazineController::class, 'all_admin_magazine'])->name('all_admin_magazine');
    Route::get('portal/Magazine/create', [App\Http\Controllers\MagazineController::class, 'admin_magazine'])->name('Magazine.create.page');
    Route::Post('portal/Magazine/create_', [App\Http\Controllers\MagazineController::class, 'create'])->name('Magazine.create.handle');
    Route::get('portal/Magazine/edit/{id}', [App\Http\Controllers\MagazineController::class, 'edit_page'])->name('Magazine.page.edit');
    Route::post('portal/Magazine/update/{id}', [App\Http\Controllers\MagazineController::class, 'edit_magazen'])->name('Magazine.edit');
    Route::delete('portal/part/delete/{id}', [App\Http\Controllers\MagazineController::class, 'delete'])->name('Magazine.delete');

    //article
    Route::resource('portal/article',ArticalController::class);
    Route::delete('portal/article/delete/{id}',[ArticalController::class,'delete'])->name('delete.article');

    //parts of article
    Route::resource('portal/parts',CategorieController::class);
});

/*
 *
   DB_DATABASE=uvcgnnsabq
   DB_USERNAME=uvcgnnsabq
   DB_PASSWORD=WwQhkXKzc7
 */