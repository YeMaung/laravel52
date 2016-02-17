<?php

namespace App;
use App\Role;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permissions';

	public function roles()
	{
		return $this->belongsToMany(Role::class);	
	}	
}
