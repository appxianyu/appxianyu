<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Huo extends Model
{
    use SoftDeletes;
    protected $table = 'huos';
	protected $dates = ['deleted_at'];
	public function user()
	{
		return $this->belongsTo('App\User','user_id','id');
	}
}
