<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('Quality');
            $table->integer('ServiceEfficiency');
            $table->integer('cleanliness');
            $table->integer('speedofservice');
            $table->integer('valueformoney');
            $table->integer('staffattitude');
            $table->text('additionalcomment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
