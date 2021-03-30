<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->text('reply');
            $table->bigInteger('rate_id')->unsigned();
            $table->bigInteger('service_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('rate_id')
            ->references('id')
            ->on('rates')
            ->onDelete('cascade');

            $table->foreign('service_id')
            ->references('id')
            ->on('services')
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
        Schema::dropIfExists('answers');
    }
}
