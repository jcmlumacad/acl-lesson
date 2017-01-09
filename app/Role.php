<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_role');
    }

    public function givePermissionTo(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }
}
