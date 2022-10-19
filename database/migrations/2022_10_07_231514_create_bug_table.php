<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBugTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bug', function (Blueprint $table) {
            $table->integer('Id', true);
            $table->integer('Project_Id')->index('Project_Id');
            $table->integer('User')->index('User');
            $table->string('Description', 100);
            $table->dateTime('Creation_Date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bug');
    }
}
