<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTambutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambuts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namabarang');
            $table->integer('jumlah');
            $table->string('peminjam');
            $table->date('tglpinjam');
            $table->date('tglkembali');
            $table->string('staffhaddware');
            $table->string('cover')->nullable();
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
        Schema::dropIfExists('tambuts');
    }
}
