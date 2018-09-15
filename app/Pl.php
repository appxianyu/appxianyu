<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pl extends Model
{
    use SoftDeletes;
    protected $table = 'pingluns';
	protected $dates = ['deleted_at'];
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
	
}
