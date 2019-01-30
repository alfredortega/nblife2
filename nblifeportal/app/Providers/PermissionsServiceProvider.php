<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Gate;
use Blade;
class PermissionsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \App\Permission::get()->map(function($permission){
            Gate::define($permission->slug, function($user) use ($permission){
               return $user->hasPermissionTo($permission);
            });
        });

        Blade::directive('role', function($role){
            return "<php if(auth()->check() && auth()->user()->hasRole({$role}) :";
        });
        Blade::directive('endrole',function($role){
            return "<?php end if; ?>";
        });

        Blade::directive('permission', function($permission){
            return "<php if(auth()->check() && auth()->user()->hasPermissionTo({$permission}) :";
        });
        Blade::directive('endpermission',function($permission){
            return "<?php end if; ?>";
        });


    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
