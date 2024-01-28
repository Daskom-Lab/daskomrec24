<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncechecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcechecks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('isMessageActive');
            $table->tinyInteger('isPlotActive');
            $table->tinyInteger('isRoleActive');
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
        Schema::dropIfExists('announcechecks');
    }
}
