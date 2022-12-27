<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;

    protected $table = 'merek';

    protected $fillable = [
        'nama_merek',
        'negara_asal',
    ];

    public function id_merek(){
        return $this->hasMany(File::class, "id_merek");
    }

    public function merk1(){
        return $this->hasMany(Komparasi::class, "merk1");
    }

    public function merk2(){
        return $this->hasMany(Komparasi::class, "merk2");
    }

    public function merk3(){
        return $this->hasMany(Komparasi::class, "merk3");
    }

    public function merk4(){
        return $this->hasMany(Komparasi::class, "merk4");
    }
}
