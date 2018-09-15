<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jifen extends Model
{
    use SoftDeletes;
    protected $table = 'jifens';
	protected $dates = ['deleted_at'];
}
