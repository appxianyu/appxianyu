<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gg extends Model
{
    use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $table = 'guanggaos';

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function xxcate()
	{
		return $this->belongsTo('App\XxCate');
	}
}
