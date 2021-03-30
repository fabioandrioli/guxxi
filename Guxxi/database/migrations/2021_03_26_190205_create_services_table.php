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
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories');

        });

        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->string('country');
            $table->string('city');
            $table->string('state');
            $table->string('street');
            $table->string('district');
            $table->string('zipcode')->nullable();
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('service_id')
                  ->references('id')
                  ->on('services')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('services');
        Schema::dropIfExists('addresses');
    }
}
