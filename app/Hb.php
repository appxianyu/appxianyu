<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hb extends Model
{
    use SoftDeletes;
    protected $table = 'huobans';
	protected $dates = ['deleted_at'];
	
}
