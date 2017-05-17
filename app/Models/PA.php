<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PA extends Model
{
	protected $table = 'pa';
	protected $primaryKey = 'pa_id';
	public $timestamps = false;
    protected $guarded = [
    	'pa_id',
    ];
}