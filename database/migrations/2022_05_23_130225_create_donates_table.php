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
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->string('donate_title');
            $table->text('donate_first_short_title');
            $table->text('donate_second_short_title');

            $table->text('donate_project_title');
            $table->text('donate_first_project__short_title');
            $table->text('donate_second_project__short_title');
            $table->text('donate_first_project__long_description');
            $table->text('donate_second_project__long_description');

            $table->text('donate_objectives__title');
            $table->text('donate_first__Objectives__description');
            $table->text('donate_second__Objectives__description');
            $table->text('donate_third__Objectives__description');
            $table->text('donate_fourth__Objectives__description');
            $table->text('donate_fifth__Objectives__description');
            $table->text('donate_sixth__Objectives__description');
            
            $table->text('donate_values_title');
            $table->text('donate_first__Values__description');
            $table->text('donate_second__Values__description');
            $table->text('donate_third__Values__description');
            $table->text('donate_fourth__Values__description');
            $table->text('donate_fifth__Values__description');










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
        Schema::dropIfExists('donates');
    }
};
