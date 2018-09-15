<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WoMen extends Model
{
    use SoftDeletes;
    protected $table = 'womens';
	protected $dates = ['deleted_at'];
}
