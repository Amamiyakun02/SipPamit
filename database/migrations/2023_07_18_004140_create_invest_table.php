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
        Schema::create('invests', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi',256)->nullable();
            $table->foreignId('user_id')->nullable();
            $table->decimal('profit_sharing',3,2)->nullable();
            $table->integer('funding_collected')->default(0);
            $table->foreignId('farm_id');
            $table->integer('funding_target');
            $table->integer('period')->nullable();

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
        Schema::dropIfExists('invests');
    }
};
