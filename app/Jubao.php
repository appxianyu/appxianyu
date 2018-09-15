<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jubao extends Model
{
    use SoftDeletes;
    protected $table = 'jubaos';
	protected $dates = ['deleted_at'];
	public function shangpin()
	{
		return $this->belongsTo('App\Sp');
	}
}
