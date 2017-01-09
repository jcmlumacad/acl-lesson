<?php namespace App;

trait HasRoles
{
    public function owns($related)
    {
        return $this->id == $related->user_id;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function assignRole($role)
    {
        $this->roles()->save(
            Role::whereName($role)->firstOrFail()
        );
    }

    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        return !! $role->intersect($this->roles)->count();

        foreach ($role as $value) {
            if ($this->hasRole($value->name)) {
                return true;
            }
        }

        return false;
    }
}