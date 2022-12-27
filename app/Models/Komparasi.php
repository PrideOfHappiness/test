<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komparasi extends Model
{
    use HasFactory;

    protected $table = 'komparasi';

    protected $fillable = [
        'merk1',
        'merk2',
        'merk3',
        'merk4',
        'mobil1',
        'mobil2',
        'mobil3',
        'mobil4',
        'kode_plat1',
        'kode_plat2',
        'kode_plat3',
        'kode_plat4',
    ];

    public function idmerk1(){
        return $this->belongsTo(Merek::class, "merk1");
    }

    public function idmerk2(){
        return $this->belongsTo(Merek::class, "merk2");
    }

    public function idmerk3(){
        return $this->belongsTo(Merek::class, "merk3");
    }

    public function idmerk4(){
        return $this->belongsTo(Merek::class, "merk4");
    }
}
