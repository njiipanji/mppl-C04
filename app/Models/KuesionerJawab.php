<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KuesionerJawab extends Model
{
	protected $table = 'kuesioner_jawab';
	protected $primaryKey = 'kuesioner_jawab_id';
	public $timestamps = false;
    protected $guarded = [
    	'kuesioner_jawab_id',
    ];
}