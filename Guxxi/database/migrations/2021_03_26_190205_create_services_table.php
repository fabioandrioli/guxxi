<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->text('tags')->nullable();

            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('address_id')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories');

            $table->foreign('address_id')
                  ->references('id')
                  ->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
