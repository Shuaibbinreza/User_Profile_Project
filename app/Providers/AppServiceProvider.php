<?php

namespace App\Providers;

use App\Core\KTBootstrap;
use App\Models\Addresses;
use App\Models\ProfileImg;
use App\Models\UserEducation;
use App\Models\UserExperience;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('global_string', function () {
            return 'fffff';
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Update defaultStringLength
        Builder::defaultStringLength(191);

        KTBootstrap::init();
        // view()->share("time", date("Y-m-d H:i:s"));
        view()->composer('*', function ($view) {
            if (\Auth::check()){
                $pi = ProfileImg::where('user_id', \Auth::user()->id)->first();
                $view->with('ProfileImage', $pi);
            }
        });

        view()->composer('*', function ($view) {
            if (\Auth::check()){
                $job = UserExperience::where('user_id', \Auth::user()->id)->first();
                $view->with('jobexp', $job);
            }
        });

        view()->composer('*', function ($view) {
            if (\Auth::check()){
                $education = UserEducation::where('user_id', \Auth::user()->id)->first();
                $view->with('education', $education);
            }
        });
    }
}
