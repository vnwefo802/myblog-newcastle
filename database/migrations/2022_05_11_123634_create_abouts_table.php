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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('about_text');
            $table->text('about_our_vision');
            $table->text('about_our_mission');


            $table->string('about_first_image');
            $table->string('about_second_image');
            $table->string('about_third_image');
            $table->string('about_fourth_image');
            $table->string('about_fifth_image');

            $table->text('about_first_member_name');
            $table->text('about_second_member_name');
            $table->text('about_third_member_name');
            $table->text('about_fourth_member_name');
            $table->text('about_fifth_member_name');

            $table->text('about_first_member_role');
            $table->text('about_second_member_role');
            $table->text('about_third_member_role');
            $table->text('about_fourth_member_role');
            $table->text('about_fifth_member_role');




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
        Schema::dropIfExists('abouts');
    }
};
