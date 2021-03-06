<?php

namespace App\Providers;

use App\Models\Auto;
use App\Models\TechSupport;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('auto_update', function (User $user, Auto $auto) {
            return $auto->user_id == $user->id;
        });
        Gate::define('tech_update', function (User $user, TechSupport $tech) {
            return $tech->user_id == $user->id;
        });
    }
}
