<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrouprolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grouproles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('caas_id');
            $table->foreign('caas_id')->references('id')->on('datacaas')->onDelete('cascade');
            $table->unsignedBigInteger('roles_id');
            $table->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade');
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
        Schema::dropIfExists('grouproles');
    }
}
