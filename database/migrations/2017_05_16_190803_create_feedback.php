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
            $table->boolean('isUser');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('Quality');
            $table->string('ServiceEfficiency');
            $table->string('cleanliness');
            $table->string('speedofservice');
            $table->string('valueformoney');
            $table->string('staffattitude');
            $table->text('additionalcomment');
            $table->timestamps();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('Cascade');
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
