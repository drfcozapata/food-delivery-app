<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

  public function register(): void {
    //
  }
  public function boot(): void {
    $this->registerGates();
  }

  protected function registerGates(): void {
    try {
      foreach (Permission::pluck('name') as $permission) {
        Gate::define($permission, function ($user) use ($permission) {
          return $user->hasPermission($permission);
        });
      }
    } catch (\Exception $e) {
      info('registerPermissions(): Base de datos no encontrada o aún no migrada. Ignorando los permisos de usuario al arrancar la aplicación.');
    }
  }
}
