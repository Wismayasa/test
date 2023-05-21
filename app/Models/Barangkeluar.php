<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangkeluar extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'barangKeluar';

    public function getBarang()
    {
        return $this->belongsTo(Barang::class, 'id_Barang', 'id');
    }
}
