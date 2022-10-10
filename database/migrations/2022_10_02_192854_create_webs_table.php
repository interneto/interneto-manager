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
            $table->foreignId('id_directory');
            $table->foreignId('id_tag');
            $table->foreignId('id_type');
            $table->string('name');
            $table->text('description');
            $table->string('url');
            $table->string('thumbnail'); // screenshot of the web
            $table->string('icon'); // icon of the web
            $table->integer('rating'); // 1 to 5 stars
            $table->timestamps()->date_modify('date_modified');
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
