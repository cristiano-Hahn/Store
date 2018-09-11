<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')-> nullable();
            $table->string('whatsapp') -> nullable();
            $table->string('facebook')-> nullable();
            $table->string('email')-> nullable();
            $table->string('instagram')-> nullable();
            $table->string('estilo')-> nullable();
            $table->string('quentefrio')-> nullable();
            $table->string('estacoes')-> nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('clientes');
    }
}
