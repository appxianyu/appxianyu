<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;
    protected $table = 'cars';
	protected $dates = ['deleted_at'];
	public function user()
	{
		return $this->hasone('App\User');
	}
}
