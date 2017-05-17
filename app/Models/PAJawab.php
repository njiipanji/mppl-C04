<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PAJawab extends Model
{
	protected $table = 'pa_jawab';
	protected $primaryKey = 'pa_jawab_id';
	public $timestamps = false;
    protected $guarded = [
    	'pa_jawab_id',
    ];
}