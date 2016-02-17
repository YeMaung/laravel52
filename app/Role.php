<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Permission;

class Role extends Model
{
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

    public function permissions()
    {
    	return $this->belongsToMany(Permission::class);
    }
}
