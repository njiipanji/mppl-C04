<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
	protected $table = 'berkas';
	protected $primaryKey = 'berkas_id';
	public $timestamps = false;
    protected $guarded = [
    	'berkas_id',
    ];
}