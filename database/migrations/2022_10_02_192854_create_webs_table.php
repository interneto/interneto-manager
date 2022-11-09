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
        Schema::create('webs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_directory')->nullable();
            $table->foreignId('id_tag');

            $table->string('name');    // name of websites
            $table->text('description')->nullable(); // description of webs
            $table->string('link');  // link of websites
            $table->string('type'); // types of webs
            $table->string('thumbnail')->nullable(); // screenshot of the web
            $table->string('icon')->nullable(); // icon of the web
            $table->integer('rating')->nullable(); // 1 to 5 stars
            //$table->timestamps()->date_modify('date_modified'); // date modified
            $table->timestamps(); // created_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webs');
    }
};
