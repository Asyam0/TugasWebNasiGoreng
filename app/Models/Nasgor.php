<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasgor extends Model
{
    protected $table = 'menu_nasgor';
    protected $fillable = ['id', 'gambar', 'nama', 'harga',];
}
