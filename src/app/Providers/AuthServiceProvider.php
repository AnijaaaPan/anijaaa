<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Helpers\Dragonfly;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\DB;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Blade::if('CheckLogin', function () {
            return Cookie::has('id');
        });

//        Blade::if('CheckEmailVerified', function () {
//            dd(is_null(Dragonfly::getUser(Cookie::get('id'))['email_verified_at']));
//            if(Cookie::has('id')){
//                return is_null(Dragonfly::getUser(Cookie::get('id'))['email_verified_at']);
//            }
//        });
    }
}
