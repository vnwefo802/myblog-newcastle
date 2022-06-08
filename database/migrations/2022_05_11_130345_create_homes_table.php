<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->string('video')->nullable();
            $table->string('button_1')->nullable();
            $table->string('button_2')->nullable();
            $table->text('box_title_1')->nullable();
            $table->text('box_title_2')->nullable();
            $table->text('box_title_3')->nullable();
            $table->text('box_title_4')->nullable();

            // $table->string('box_short_description_1')->nullable();
            // $table->string('box_short_description_2')->nullable();
            // $table->string('box_short_description_3')->nullable();
            // $table->string('box_short_description_4')->nullable();

            $table->text('project_title')->nullable();
            $table->string('project_image')->nullable();
            $table->text('project_short_title')->nullable();
            $table->string('project_button')->nullable();
            $table->text('difference_title')->nullable();
            $table->string('difference_button_1')->nullable();
            $table->string('difference_button_2')->nullable();
            $table->string('difference_image')->nullable();
            $table->string('Logo')->nullable();
            $table->string('favicon')->nullable();
            
            



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
        Schema::dropIfExists('homes');
    }
};
