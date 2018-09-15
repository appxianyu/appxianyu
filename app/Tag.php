<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;
    
	protected $dates = ['deleted_at'];

	public function shangpins()
	{
		 return $this->belongsToMany('App\Sp','sp_tag','tag_id','sp_id');
	}
	
}
