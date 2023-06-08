<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    use HasFactory;
    protected $table = "jabatan";
    protected $primaryKey = "id";
    protected $fillable = [
        'jabatan',
        'id'
    ];

    public function latuas(){
        return $this->hasMany(latuas::class);
    }
}
