<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('post_id')->unsigned();
            $table->unsignedBigInteger('tag_id')->unsigned();
            $table->timestamps();

            //Relacion
            // $table->foreign('user_id')->references('id')->on('users');}
            $table->foreign('post_id')->references('id')->on('posts')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('tag_id')->references('id')->on('tags')
             ->onDelete('cascade')
             ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
