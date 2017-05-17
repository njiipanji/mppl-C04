<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
	protected $table = 'hari';
	protected $primaryKey = 'hari_id';
	public $timestamps = false;
    protected $guarded = [
    	'hari_id',
    ];
}