<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatNomor extends Model
{
    use HasFactory;

    protected $table = 'plat_nomors';

    protected $fillable = [
        'kode_negara',
        'nama_negara',
        'namaFile',
    ];

    public function id_plat(){
        return $this->hasMany(File::class, "id_plat");
    }
}
