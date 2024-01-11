<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssistantcontactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistantcontacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('photo');
            $table->text('name');
            $table->string('ascode');
            $table->string('instagram');
            $table->string('idline');
            $table->bigInteger('nohp');
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
        Schema::dropIfExists('assistantcontacts');
    }
}
