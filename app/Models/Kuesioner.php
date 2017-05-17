<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model
{
	protected $table = 'kuesioner';
	protected $primaryKey = 'kuesioner_id';
	public $timestamps = false;
    protected $guarded = [
    	'kuesioner_id',
    ];
}
