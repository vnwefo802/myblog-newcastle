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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('copyright');
            //community section
            $table->string('community1');
            $table->string('community2');
            $table->string('community3');
            $table->string('community4');
            $table->string('community_link_1');
            $table->string('community_link_2');            
            $table->string('community_link_3');
            $table->string('community_link_4');
            //blog section
            $table->string('blog1');
            $table->string('blog2');
            $table->string('blog3');
            $table->string('blog4');
            $table->string('blog5');
            $table->string('blog_link_1');
            $table->string('blog_link_2');
            $table->string('blog_link_3');
            $table->string('blog_link_4');
            $table->string('blog_link_5');
            //contact us section
            $table->string('contact1');
            $table->string('contact2');
            $table->string('contact3');
            $table->string('contact4');
            $table->string('contact5');
            $table->string('contact_link_1');
            $table->string('contact_link_2');
            $table->string('contact_link_3');
            $table->string('contact_link_4');
            $table->string('contact_link_5');
            

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
        Schema::dropIfExists('footers');
    }
};
