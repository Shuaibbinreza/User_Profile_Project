<?php

namespace App\Providers;

use App\Core\KTBootstrap;
use App\Models\Addresses;
use App\Models\ProfileImg;
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
            // $view->with('User_Img', Addresses::all()); // Query your data here
            $uid = \Auth::user()->id;
            $pi = ProfileImg::where('user_id', \Auth::user()->id)->first();
            $view->with('ProfileImage', $pi);
        });
    }
}
