<?php

namespace App\Providers;

use App\Models\Artiste;
use App\Models\Film;
use App\Policies\ArtistePolicy;
use App\policies\FilmPolicy;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Artiste::class => ArtistePolicy::class,
        Film::class => FilmPolicy::class,
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::resource('artistes', FilmPolicy::class);
        Gate::resource('films', FilmPolicy::class);
        //
    }
}
