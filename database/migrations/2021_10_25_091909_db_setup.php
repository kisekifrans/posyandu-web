<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbSetup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 255);
            $table->string('nik', 16)->unique();
            $table->string('tmpt_lahir', 100);
            $table->date('tgl_lahir', 100);
            $table->text('alamat', 255);
            $table->string('telp', 15);
            $table->string('email', 100);
            $table->timestamps();
        });


        Schema::create('balitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 255);
            $table->string('tmpt_lahir', 100);
            $table->date('tgl_lahir', 100);
            $table->text('alamat', 255);
            $table->string('nama_ayah', 255);
            $table->string('nama_ibu', 255);
            $table->string('nik_ayah', 16)->unique();
            $table->string('nik_ibu', 16)->unique();
            $table->string('telp', 15);
            $table->string('email', 100);
            $table->integer('umur');
            $table->integer('tb');
            $table->integer('bb');
            $table->integer('lk');
            $table->unsignedBigInteger('kader_id_balita');
            $table->timestamps();

            $table->foreign('kader_id_balita')->references('id')->on('kaders')
                ->onUpdate('cascade')->onDelete('cascade');
        });


        Schema::create('bumils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 255);
            $table->string('nik', 16)->unique();
            $table->string('tmpt_lahir', 100);
            $table->date('tgl_lahir', 100);
            $table->text('alamat', 255);
            $table->string('telp', 15);
            $table->string('email', 100);
            $table->integer('umur');
            $table->integer('tb');
            $table->integer('bb');
            $table->integer('lila');
            $table->unsignedBigInteger('kader_id_bumil');
            $table->timestamps();

            $table->foreign('kader_id_bumil')->references('id')->on('kaders')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balitas');
        Schema::dropIfExists('bumils');
        Schema::dropIfExists('kaders');
    }
}
