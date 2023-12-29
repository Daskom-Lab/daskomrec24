<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateDataCaasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datacaas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('nim')->Unique();
            $table->string('emai')->unique();
            $table->string('class'); //bakal masukin role caas (sesuai yang sudah dibuat)
            $table->string('password');
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
        Schema::drop('datacaas');
    }
}
