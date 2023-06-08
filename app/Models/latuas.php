<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class latuas extends Model
{
    use HasFactory;
    protected $table = "latuas";
    protected $fillable = [
        'nama',
        'uang',
        'tanggal',
        'jabatanid'
    ];

    public function jabatan(){
        return $this->belongsTo(jabatan::class);
    }
}
