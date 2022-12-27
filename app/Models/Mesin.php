<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesin extends Model
{
    use HasFactory;

    protected $table = 'mesin';

    protected $fillable = [
        'nama_mesin',
    ];

    public function id_mesin(){
        return $this->hasMany(File::class, "id_mesin");
    }
}
