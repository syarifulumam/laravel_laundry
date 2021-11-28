<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'transaksi';

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
    public function paket_laundry()
    {
        return $this->belongsTo(Paket_laundry::class);
    }
}
