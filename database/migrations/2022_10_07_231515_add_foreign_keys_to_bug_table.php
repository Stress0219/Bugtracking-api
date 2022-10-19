<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBugTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bug', function (Blueprint $table) {
            $table->foreign(['User'], 'UserBug')->references(['Id'])->on('user');
            $table->foreign(['Project_Id'], 'ProjectBug')->references(['Id'])->on('project');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bug', function (Blueprint $table) {
            $table->dropForeign('UserBug');
            $table->dropForeign('ProjectBug');
        });
    }
}
