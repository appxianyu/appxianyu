<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class XxCate extends Model
{
    use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $table = 'xxcates';

	public function xcate()
	{
		return $this->belongsTo('App\XCate','xcate_id','id');
	}

	public function shangpin()
	{
		return $this->hasMany('App\Sp','xxcate_id','id');
	}

}
