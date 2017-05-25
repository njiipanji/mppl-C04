<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $table = 'roles';
	public $timestamps = false;
    protected $guarded = [
    	'id',
    ];

    public function user()
    {
    	return $this->hasMany(User::class);
    }
}