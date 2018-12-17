<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminControllersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_controllers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',30);
            $table->string('password',200);
            $table->string('email',200);
            $table->string('phone',200);
            $table->tinyInteger('level',200);
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
        Schema::dropIfExists('admin_controllers');
    }
}