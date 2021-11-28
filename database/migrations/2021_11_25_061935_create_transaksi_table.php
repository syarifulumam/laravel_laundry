<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelanggan_id')->constrained('users');
            $table->foreignId('paket_laundry_id')->constrained('paket_laundry');
            $table->integer('berat');
            $table->string('metode_pembayaran');
            $table->string('status_pembayaran');
            $table->enum('antar_laundry',['ya','tidak']);
            $table->enum('status',['baru','cuci','selesai']);
            $table->string('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
