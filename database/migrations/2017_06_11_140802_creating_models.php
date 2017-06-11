<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatingModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('picture_comments', function(Blueprint $table){
            $table->increments('id');
            $table->integer('picture_id')->unsigned()
                ->nullable();
            $table->integer('parent_id')->unsigned()
                ->nullable();
            $table->integer('user_id')->unsigned()
                ->nullable();
            $table->text('body');
            $table->timestamps();
        });

        Schema::create('votes', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('model_id')->unsigned()
                ->nullable();
            $table->text('model_name');
            $table->boolean('direction')->nullable();
            $table->integer('user_id')->unsigned()
                ->nullable();
            $table->timestamps();
        });

        Schema::create('tags', function(Blueprint $table){
            $table->increments('id');
            $table->text('name');
        });

        Schema::create('picture_tag', function(Blueprint $table) {
            $table->integer('picture_id')->unsigned()
                ->nullable();
            $table->integer('tag_id')->unsigned()
                ->nullable();
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}