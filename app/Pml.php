<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pml extends Model
{
	use SoftDeletes;

    protected $table = 'pmliebiao';
	protected $dates = ['deleted_at'];
    public function shangpin()
	{
		return $this->belongsTo('App\Sp');
	}

	public function paimais()
	{
		return $this->belongsTo('App\Pm','shangpin_id','id');
	}
}
