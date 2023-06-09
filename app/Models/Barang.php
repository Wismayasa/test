<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'barang';

    public function getbarangmasuk()
    {
        return $this->belongsTo(Barangmasuk::class, 'id', 'id_Barang');
    }

    public function getbarangkeluar()
    {
        return $this->belongsTo(Barangkeluar::class, 'id', 'id_Barang');
    }
}
