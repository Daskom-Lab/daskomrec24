<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('nextstage');
            $table->timestamps();
            $table->unsignedBigInteger('caas_id');
            $table->foreign('caas_id')->references('id')->on('datacaas')->onDelete('cascade');
            $table->unsignedBigInteger('stages_id');
            $table->foreign('stages_id')->references('id')->on('stages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses');
    }
}
