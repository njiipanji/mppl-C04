<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
	protected $table = 'pengumumans';
	protected $primaryKey = 'pengumuman_id';
	public $timestamps = false;
    protected $guarded = [
    	'pengumuman_id',
    ];
}
