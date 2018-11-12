<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {
    public function up() {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subcategory_id');
            $table->integer('user_id');
            $table->text('question');
            $table->text('options')->nullable();
            $table->text('answer')->nullable();
            $table->text('direction')->nullable();
            $table->text('explanation')->nullable();
            $table->string('title')->nullable();
            $table->enum('type', ['saved', 'submited'])->default('saved');
            $table->enum('published', ['0', '1'])->default('0');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('questions');
    }
}
