<?php

namespace App\Providers;

// добавленно для корректной работы аутентификации
use App\Task;
use App\Policies\TaskPolicy;
//----------------------------------
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Task::class => TaskPolicy::class,// Добавлено. Нужно для того, чтобы Ларавел знал, какую политику(policy) использовать всякий раз, когда мы пытаемся авторизовать действие над экземпляром класса Task.
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //
    }
}
