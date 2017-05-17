<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ceklis extends Model
{
	protected $table = 'ceklis';
	protected $primaryKey = 'ceklis_id';
	public $timestamps = false;
    protected $guarded = [
    	'ceklis_id',
    ];
}