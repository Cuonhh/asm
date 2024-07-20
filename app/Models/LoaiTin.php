<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    use HasFactory;

    protected $table = 'loai_tin';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
?>