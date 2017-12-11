<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoLinksTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_link_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rel')->unique()->nullable();
            $table->string('href')->nullable();
            $table->string('status')->default('active');
            $table->integer('page_id')->nullable();

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
        Schema::dropIfExists('seo_link_tags');
    }
}
