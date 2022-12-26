<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;

    protected $table = 'merek';

    protected $fillable = [
        'merek',
        'negara_asal',
    ];

    public function merek(){
        return $this-hasMany(File::class, "id_merek");
    }
}
