<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration {
    public function up() {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->integer('question_id');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('answers');
    }
}
