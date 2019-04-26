<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPrizesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prize_money', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
        });

        Schema::table('prize_bonuses', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
        });

        Schema::table('prize_things', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
        });

        Schema::table('prizes', function (Blueprint $table) {
            $table->renameColumn('model', 'model_type')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prize_money', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });

        Schema::table('prize_bonuses', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });

        Schema::table('prize_things', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });

        Schema::table('prizes', function (Blueprint $table) {
            $table->renameColumn('model_type', 'model')->change();
        });

    }
}
