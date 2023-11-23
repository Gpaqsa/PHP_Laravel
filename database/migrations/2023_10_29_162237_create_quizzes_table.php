<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('questions');
            $table->text('options');
            $table->timestamps();
        });
        Schema::table('quizzes', function (Blueprint $table) {
            // Add status field
            $table->boolean('status')->default(1); // Assuming default status is active

            // Add photo field
            $table->string('photo')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('quizzes');
        Schema::table('quizzes', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('photo');
        });
    }
}