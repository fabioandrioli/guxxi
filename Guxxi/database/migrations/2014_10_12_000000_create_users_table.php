<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('street');
            $table->string('district');
            $table->string('zipcode')->nullable();
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id')->unsigned();
            $table->string('name');
            $table->binary('photo')->nullable();
            $table->string('cpf')->nullable();
            $table->string('email')->unique();
            $table->date('datebirth');
            $table->bigInteger('address_id')->unsigned()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('role_id')
                  ->references('id')
                  ->on('roles');

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
        Schema::dropIfExists('roles');
        Schema::dropIfExists('addresses');
        Schema::dropIfExists('users');
    }
}
