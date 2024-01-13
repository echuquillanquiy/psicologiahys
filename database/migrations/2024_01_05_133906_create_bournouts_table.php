<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bournouts', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('dni')->nullable();
            $table->date('birthday')->nullable();
            $table->string('age')->nullable();
            $table->enum('sex', ['M', 'F'])->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('born_place')->nullable();
            $table->string('address')->nullable();
            $table->integer('answer1');
            $table->integer('answer2');
            $table->integer('answer3');
            $table->integer('answer4');
            $table->integer('answer5');
            $table->integer('answer6');
            $table->integer('answer7');
            $table->integer('answer8');
            $table->integer('answer9');
            $table->integer('answer10');
            $table->integer('answer11');
            $table->integer('answer12');
            $table->integer('answer13');
            $table->integer('answer14');
            $table->integer('answer15');
            $table->integer('answer16');
            $table->integer('answer17');
            $table->integer('answer18');
            $table->integer('answer19');
            $table->integer('answer20');
            $table->integer('answer21');
            $table->integer('answer22');
            $table->integer('score')->nullable();
            $table->string('percent')->nullable();
            $table->string('category')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bournouts');
    }
};
