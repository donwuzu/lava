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
        Schema::create('career_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // To associate data with a user
            $table->string('education');
            $table->text('skills');
            $table->text('experience');
            $table->string('linkedin')->nullable();
            $table->string('file_name')->nullable(); // Store the document file name
            $table->string('file_path')->nullable(); // Store the document file path
            $table->string('file_type')->nullable(); // Store the document file type
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_data');
    }
};
