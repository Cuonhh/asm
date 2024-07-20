<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    use HasFactory;

    protected $table = 'tin';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'tieu_de',
        'noi_dung',
        'noi_dung_ngan',
        'tac_gia',
        'ngay_dang',
        'hinh_anh' // đảm bảo thuộc tính hinh_anh được thêm vào đây
    ];
}
