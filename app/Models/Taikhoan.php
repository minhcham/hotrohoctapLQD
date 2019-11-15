<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Session;

class Taikhoan extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tbl_taikhoan';

    public static function getAvatar(){
       return Taikhoan::where('matk',Session::get('taikhoan')['matk'])->select('link_anh')->first();
    }
}
