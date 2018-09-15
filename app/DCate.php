<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DCate extends Model
{
    use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $table = 'dcates';

	public function xcates()
	{
		return $this->hasMany('App\XCate','dcate_id','id');
	}
	public function xcate()
	{
		return $this->hasMany('App\XCate','dcate_id','id');
	}
	public function logo()
	{
		return $this->hasMany('App\Logo','dcate_id','id');
	}
	 
}
