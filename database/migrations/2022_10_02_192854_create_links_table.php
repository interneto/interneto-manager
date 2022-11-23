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
            $table->foreignId('tag_id');
            $table->string('name');    // name of links
            $table->text('description')->nullable(); // description of link
            $table->string('uri');  // uri (uniform resource identifier)
            $table->string('thumbnail')->nullable(); // screenshot of the link
            $table->string('icon')->nullable(); // icon of the link
            $table->timestamps(); // created_at
            //$table->string('type'); // types of links
            //$table->integer('rating')->nullable(); // 1 to 5 stars
            //$table->timestamps()->date_modify('date_modified'); // date modified
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
