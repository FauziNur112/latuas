<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class latuas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'uang',
        'tanggal'
    ];
}
