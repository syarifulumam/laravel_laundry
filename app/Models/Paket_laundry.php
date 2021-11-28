<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket_laundry extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'paket_laundry';

    // public function transaksi()
    // {
    //     return $this->belongsTo(Transaksi::class);
    // }
}
