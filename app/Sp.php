<?php

namespace App;

use Doctrine\DBAL\Schema\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sp extends Model
{	
	
	use SoftDeletes;

	protected $table = 'shangpins';
	protected $dates = ['deleted_at'];


	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function xxcate()
	{
		return $this->belongsTo('App\XxCate');
	}

	public function tags()
	{
		 return $this->belongsToMany('App\Tag');
	}

	public function pingluns()
	{
		return $this->hasMany('App\Pl','shangpin_id','id');
	}


    /**
     * 需要被转换成日期的属性。
     *
     * @var array
     */

}
