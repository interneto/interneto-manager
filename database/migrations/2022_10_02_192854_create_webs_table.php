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
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('directory_id')->nullable();
            $table->foreignId('id_tag');

            $table->string('name');    // name of links
            $table->text('description')->nullable(); // description of link
            $table->string('link');  // link
            $table->string('type'); // types of links
            $table->string('thumbnail')->nullable(); // screenshot of the link
            $table->string('icon')->nullable(); // icon of the link
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
        Schema::dropIfExists('links');
    }
};
