<?php

namespace App\Providers;

use App\Models\socialSetting;
use Illuminate\Support\Facades\URL;
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
  //     URL::forceScheme('https');

        $social = socialSetting::first();
        $google = [
            'client_id' => $social->googleClient,
            'client_secret' => $social->googleSecret,
            'redirect' => 'https://chatbti.herokuapp.com/public/auth/google/callback',
        ];
        config()->set('services.google', $google);
        $facebook = [
            'client_id' => $social->facebookClient,
            'client_secret' => $social->facebookSecret,
            'redirect' => 'https://chatbti.herokuapp.com/public/auth/facebook/callback',
        ];
        config()->set('services.facebook', $facebook);

        $twitter = [
            'client_id' => $social->twitterClient,
            'client_secret' => $social->twitterSecret,
            'redirect' => 'https://chatbti.herokuapp.com/public/auth/facebook/callback',
        ];
        config()->set('services.twitter', $twitter);


     }
}
