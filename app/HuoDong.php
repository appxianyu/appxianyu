<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HuoDong extends Model
{
    use SoftDeletes;
    protected $table = 'huodongs';
	protected $dates = ['deleted_at'];
}
