<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->enum('note',['pessimo','ruim','regular','bom','ótimo']);
            $table->text('review');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('service_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users');

            $table->foreign('service_id')
            ->references('id')
            ->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rates');
    }
}
