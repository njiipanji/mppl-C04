<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
	protected $table = 'materi';
	protected $primaryKey = 'materi_id';
	public $timestamps = false;
    protected $guarded = [
    	'materi_id',
    ];
}