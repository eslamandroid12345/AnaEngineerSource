<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Http\ViewComposers\HeaderComposer;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('Front.artical.blogs', HeaderComposer::class);
        View::composer('Front.Magazine.Magazine', HeaderComposer::class);
        View::composer('Front.plans.plans', HeaderComposer::class);
        View::composer('Front\artical\blog-details', HeaderComposer::class);
        View::composer('Front.course.coursedetails', HeaderComposer::class);
        View::composer('Front.policy_terms_questions.aboutus', HeaderComposer::class);
        View::composer('Front.policy_terms_questions.common_questions', HeaderComposer::class);
        View::composer('Front.policy_terms_questions.contact_us', HeaderComposer::class);
        View::composer('Front.policy_terms_questions.policy', HeaderComposer::class);
        View::composer('Front.policy_terms_questions.terms', HeaderComposer::class);
        View::composer('Front.policy_terms_questions.ourvision', HeaderComposer::class);
        View::composer('Front.policy_terms_questions.job', HeaderComposer::class);


        View::composer('stripe', HeaderComposer::class);



        View::composer('home', HeaderComposer::class);

    }

}
