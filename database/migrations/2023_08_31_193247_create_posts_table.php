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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger( 'user_id')->unsigned();
            $table->bigInteger( 'category_id')->unsigned();
            $table->string( 'title');
            $table->string( 'thumbnail_url');
            $table->longText( 'content');
            $table->enum( 'status', ['unpublished', 'published']);
            $table->timestamps();

            //foreign keys
            $table->foreign( 'user_id')->on('users')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign( 'category_id')->on('categories')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
