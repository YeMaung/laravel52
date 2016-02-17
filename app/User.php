<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    public $module = "user";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','user_type',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name',$role);
        }

        return !! $role->intersect($this->roles)->count();
    }

    public function assign($role)
    {
        if (is_string($role)) 
        {
            return $this->roles()->save(
                Role::whereName($role)->firstOrFail()
            );
        }

        return $this->roles()->save($role);
    }

    /**
     * @return string
     */
    public function getConfirmedLabelAttribute() {
        if ($this->confirmed == 1)
            return "<label class='label label-success'>Yes</label>";
        return "<label class='label label-danger'>No</label>";
    }
}
