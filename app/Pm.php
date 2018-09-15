<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pm extends Model
{
    use SoftDeletes;

    protected $table = 'paimais';
	protected $dates = ['deleted_at'];

	

	public function xxcate()
	{
		return $this->belongsTo('App\XxCate');
	}

	public function users()
	{
		return $this->belongsTo('App\User');
	}

	public function pingluns()
	{
		 return $this->hasMany('App\Pl','shangpin_id','id');
	}

	public function pmliebiao()
	{
		return $this->belongsTo('App\Pml');
	}
}
