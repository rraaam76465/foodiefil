<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Automatically creates an auto-incrementing primary key 'id'
            $table->string('name'); // User's name
            $table->string('email')->unique(); // Email address (unique constraint to prevent duplicates)
            $table->string('password'); // Hashed password
            $table->timestamps(); // Created at and updated at
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('users'); // Drop the table if it exists
    }
};