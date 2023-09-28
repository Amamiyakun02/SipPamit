<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeri_user', function (Blueprint $table) {
            $table->id();
            $table->string('gambar', 2048)->default('https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/team-2.jpg');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeri_user');
    }
};
