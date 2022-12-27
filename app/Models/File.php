<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = 'file';

    protected $fillable = [
        'id_merek',
        'nama',
        'id_mesin',
        'id_plat',
        'namaFile',
    ];

    public function merek(){
        return $this->belongsTo(Merek::class, "id_merek");
    }

    public function mesin(){
        return $this->belongsTo(Mesin::class, "id_mesin");
    }

    public function plat_nomor(){
        return $this->belongsTo(PlatNomor::class, "id_plat");
    }

}
