<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Logo extends Model
{
    use SoftDeletes;
    protected $table = 'logos';
	protected $dates = ['deleted_at'];
	public function dcate()
	{

		return $this->belongsTo('App\DCate','dcate_id','id');
	}
}
