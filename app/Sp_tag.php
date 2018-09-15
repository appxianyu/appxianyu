<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sp_tag extends Model
{
   	use SoftDeletes;

    protected $table = 'sp_tag';
	protected $dates = ['deleted_at'];
}
