<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id'); // Primary Key
            $table->unsignedBigInteger('barang_id'); // Foreign Key ke m_barang
            $table->unsignedBigInteger('user_id'); // Foreign Key ke m_user
            $table->dateTime('stok_tanggal');
            $table->integer('stok_jumlah');
            $table->timestamps();
        
            // Foreign Key Constraints - Harus sesuai dengan Primary Key yang dirujuk
            $table->foreign('barang_id')->references('barang_id')->on('m_barang')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('m_user')->onDelete('cascade');
        });
        

    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('t_stok');
    }
};
