<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToFood extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('food', function (Blueprint $table) {
            $table->unsignedInteger('offer_lg')->nullable();
            $table->unsignedInteger('offer_xl')->nullable();
            $table->unsignedInteger('offer_xxl')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('food', function (Blueprint $table) {
            $table->dropColumn('offer_lg')->nullable();
            $table->dropColumn('offer_xl')->nullable();
            $table->dropColumn('offer_xxl')->nullable();
        });
    }
}
