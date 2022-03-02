<?php

namespace App\Providers;

use App\Models\socialSetting;
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

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $social = socialSetting::first();
        $att = [
            'client_id' => $social->googleClient,
            'client_secret' => $social->googleSecret,
            'redirect' => 'https://chatbti.herokuapp.com/public/auth/google/callback',
        ];
        config()->set('services.google', $att);


    }
}
