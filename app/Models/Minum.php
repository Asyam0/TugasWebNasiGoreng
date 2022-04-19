<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minum extends Model
{
    protected $table = 'menu_minum';
    protected $fillable = ['id', 'gambar', 'nama', 'harga',];
}
