<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('about_text')->nullable();
            $table->text('about_our_vision')->nullable();
            $table->text('about_our_mission')->nullable();



            $table->string('about_first_image')->nullable();
            $table->string('about_second_image')->nullable();
            $table->string('about_third_image')->nullable();
            $table->string('about_fourth_image')->nullable();
            $table->string('about_fifth_image')->nullable();

            $table->text('about_first_member_name')->nullable();
            $table->text('about_second_member_name')->nullable();
            $table->text('about_third_member_name')->nullable();
            $table->text('about_fourth_member_name')->nullable();
            $table->text('about_fifth_member_name')->nullable();


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
        Schema::dropIfExists('settings');
    }
}
