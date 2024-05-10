<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_pemesan',
        'nama_menu',
        'jml_porsi',
        'total_harga',
        'potongan_harga',
        'grand_total',
    ];
}