<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mon extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'mamon';
    public $incrementing = false;
    protected $table = 'tbl_mon';

    protected $fillable = [
        'tenmon', 'nguoitao'
    ];

    public function taikhoan()
    {
        return $this->belongsTo(Taikhoan::class, 'nguoitao', 'matk');
    }
}
