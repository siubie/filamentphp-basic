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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            //add columns for avatar
            $table->string('avatar')->nullable();
            //add columns for name
            $table->string('name');
            //add columns for position
            $table->string('position');
            //add columns for twitter
            $table->string('twitter')->nullable();
            //add columns for facebook
            $table->string('facebook')->nullable();
            //add columns for instagram
            $table->string('instagram')->nullable();
            //add columns for linkedin
            $table->string('linkedin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
