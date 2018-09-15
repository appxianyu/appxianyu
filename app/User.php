<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;

    protected $table = 'users';

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //与商品关系   一对多
    public function shangpins()
    {
        return $this->hasMany('App\Sp');
    }

    //与拍卖商品关系  一对多
    public function paimais()
    {
        return $this->hasMany('App\Pm');
    }

    //与消息的关系 一对多
    public  function contents()
    {
        return $this->hasMany('App\Content');
    }

    //与广告位关系   一对多
    public  function guanggaos()
    {
        return $this->hasMany('App\Gg');
    }

    public  function car()
    {
        return $this->hasMany('App\Car','user_id','id');
    }


    //与评论关系 一对多
    public function pingluns()
    {
        return $this->hasMany('App\Pl');
    }

    public function huo()
    {
        return $this->hasMany('App\Huo','user_id','id');


    }

    public function shoucangs()
    {
        return $this->belongsToMany('App\Sc','user_shangpin','shangpin_id','user_id');
    }
}
