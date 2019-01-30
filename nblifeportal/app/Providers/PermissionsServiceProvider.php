<?php

namespace App\Providers;
use App\Permission;
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
        Permission::get()->map(function($permission){
            Gate::define($permission->slug, function($user) use ($permission){
               return $user->hasPermissionTo($permission);
            });
        });

        //Blade directives
        Blade::directive('role', function ($role){
            return "<?php if(auth()->check() && auth()->user()->hasRole({$role})) : ?>";
        });
        Blade::directive('endrole', function ($role){
            return "<?php endif; ?>";
        });

        Blade::directive('permission', function($permission){
            //hasPermissionTo
            $pcount = auth()->user()->permissions_count;
            return "<?php if(auth()->check() && auth()->user()->can({$permission})) : ?>";
        });
        Blade::directive('endpermission',function($permission){
            return "<?php endif; ?>";
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
