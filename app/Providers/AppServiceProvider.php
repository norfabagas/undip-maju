<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use DB;
use App\FrontConfig;
use App\UnitBisnis;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //view return in layout front2
        view()->composer('layouts.front2', function($view) {
            //title config
            $title = FrontConfig::where('config_name', '=', 'title')->first();
            //tagline config
            $tagline = FrontConfig::where('config_name', '=', 'tagline')->first();
            //facebook config
            $facebook = FrontConfig::where('config_name', '=', 'facebook')->first();
            //twitter config
            $twitter = FrontConfig::where('config_name', '=', 'twitter')->first();
            //googleplus config
            $googleplus = FrontConfig::where('config_name', '=', 'googleplus')->first();
            //alamat config
            $alamat = FrontConfig::where('config_name', '=', 'alamat')->first();
            //telepon config
            $telepon = FrontConfig::where('config_name', '=', 'telepon')->first();
            // email config
            $email = FrontConfig::where('config_name', '=', 'email')->first();
            // jam kerja config
            $jamkerja = FrontConfig::where('config_name', '=', 'jamkerja')->first();
            // kota config
            $kota = FrontConfig::where('config_name', '=', 'kota')->first();
            // unit config
            $unit = UnitBisnis::get();
            $view
                ->with('title', $title)
                ->with('tagline', $tagline)
                ->with('facebook', $facebook)
                ->with('twitter', $twitter)
                ->with('googleplus', $googleplus)
                ->with('alamat', $alamat)
                ->with('telepon', $telepon)
                ->with('email', $email)
                ->with('jamkerja', $jamkerja)
                ->with('kota', $kota)
                ->with('unit', $unit);
        });
        //view return in layout front1
        view()->composer('layouts.front1', function($view) {
            //title config
            $title = FrontConfig::where('config_name', '=', 'title')->first();
            //tagline config
            $tagline = FrontConfig::where('config_name', '=', 'tagline')->first();
            //facebook config
            $facebook = FrontConfig::where('config_name', '=', 'facebook')->first();
            //twitter config
            $twitter = FrontConfig::where('config_name', '=', 'twitter')->first();
            //googleplus config
            $googleplus = FrontConfig::where('config_name', '=', 'googleplus')->first();
            //alamat config
            $alamat = FrontConfig::where('config_name', '=', 'alamat')->first();
            //telepon config
            $telepon = FrontConfig::where('config_name', '=', 'telepon')->first();
            // email config
            $email = FrontConfig::where('config_name', '=', 'email')->first();
            // jam kerja config
            $jamkerja = FrontConfig::where('config_name', '=', 'jamkerja')->first();
            // kota config
            $kota = FrontConfig::where('config_name', '=', 'kota')->first();
            // unit config
            $unit = UnitBisnis::get();
            $view
                ->with('title', $title)
                ->with('tagline', $tagline)
                ->with('facebook', $facebook)
                ->with('twitter', $twitter)
                ->with('googleplus', $googleplus)
                ->with('alamat', $alamat)
                ->with('telepon', $telepon)
                ->with('email', $email)
                ->with('jamkerja', $jamkerja)
                ->with('kota', $kota)
                ->with('unit', $unit);
        });

        //config for database key constraints
        Schema::defaultStringLength('191');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
