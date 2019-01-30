<?php
namespace App\Permissions;

use App\Permission;
use App\Role;

trait HasPermissionsTrait {

   public function roles() {
      return $this->belongsToMany(Role::class,'users_roles');

   }


   public function permissions() {
      return $this->belongsToMany(Permission::class,'users_permissions');

   }


   public function hasRole( ... $roles ) {
        foreach ($roles as $role) {
        if ($this->roles->contains('slug', $role)) {
            return true;
        }
        }
        return false;
    }   

    protected function hasPermissionTo($permission) {
        return $this->hasPermission($permission);
     }
     
     protected function hasPermission($permission) {
        return (bool) $this->permissions->where('slug', $permission->slug)->count();
     }

     public function hasPermissionThroughRole($permission) {
        foreach ($permission->roles as $role){
           if($this->roles->contains($role)) {
              return true;
           }
        }
        return false;
     }     

     public function givePermissionsTo(... $permissions) {
        $permissions = $this->getAllPermissions($permissions);
        dd($permissions);
        if($permissions === null) {
           return $this;
        }
        $this->permissions()->saveMany($permissions);
        return $this;
     }

     public function deletePermissions( ... $permissions ) {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
     }















}