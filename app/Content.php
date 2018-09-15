<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function users()
	{
		return $this->belongsTo('App\User');
	}
}
