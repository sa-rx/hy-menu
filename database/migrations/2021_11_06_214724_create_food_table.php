<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('content')->nullable();
            $table->string('img')->nullable();
            $table->unsignedInteger('price');
            $table->unsignedInteger('price_lg')->nullable();
            $table->unsignedInteger('price_xl')->nullable();
            $table->unsignedInteger('price_xxl')->nullable();

            $table->unsignedInteger('offer_price')->nullable();
            $table->unsignedInteger('calories')->nullable();
            $table->unsignedTinyInteger('available')->default(1);
            $table->unsignedTinyInteger('status')->default(0);

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');


            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');      

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
        Schema::dropIfExists('food');
    }
}
