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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->date('date');
            $table->string('venue');
            $table->string('duration');
            $table->bigInteger('fees');
            $table->longText('details');
            $table->text('course_for')->nullable();
            $table->text('goals')->nullable();
            $table->text('presentation')->nullable();
            $table->string('certificate')->nullable();
            $table->string('bronchure')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
