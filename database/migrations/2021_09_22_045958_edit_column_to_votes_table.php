<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditColumnToVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('votes', function (Blueprint $table) {
            $table->dropColumn('score');
        });

        Schema::table('votes', function (Blueprint $table) {
            $table->enum('score', [0, -1, 1])->after('votable_id');
            $table->unique(['user_id', 'votable_type', 'votable_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('votes', function (Blueprint $table) {
            $table->dropColumn('score');
            $table->integer('score')->default(0);
            $table->dropUnique(['user_id', 'votable_type', 'votable_id']);
        });
    }
}
