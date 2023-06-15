<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNeracasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neracas', function (Blueprint $table) {

            $table->id();
            $table->integer('nomor');
            $table->string('nama_akun', 100);
            $table->integer('debit')->default(0);
            $table->integer('kredit')->default(0);
            $table->date('tanggal');
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
        Schema::dropIfExists('neracas');
    }
}
