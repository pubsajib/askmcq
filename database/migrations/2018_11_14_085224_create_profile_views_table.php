<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileViewsTable extends Migration {
    public function up() {
        Schema::create('profile_views', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('viewer_id')->unsigned()->nullable();
            $table->string("ip")->nullable();
            // $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('profile_views');
    }
}
