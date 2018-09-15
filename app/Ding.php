<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ding extends Model
{
    use SoftDeletes;
    protected $table = 'dings';
	protected $dates = ['deleted_at'];
	public function user()
	{
		return $this->belongsTo('App\User','user_id','id');
	}
	public function huo()
	{
		return $this->hasone('App\Huo','id','shouhuo_id');
	}
}
