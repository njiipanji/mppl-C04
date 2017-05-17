<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
	protected $table = 'peserta';
	protected $primaryKey = 'peserta_id';
	public $timestamps = false;
    protected $guarded = [
    	'peserta_id',
    ];
}