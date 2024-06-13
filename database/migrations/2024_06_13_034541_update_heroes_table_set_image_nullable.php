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
        //update hero table set image to nullable
        Schema::table('heroes', function (Blueprint $table) {
            $table->string('image')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //set the reverse of the migration
        Schema::table('heroes', function (Blueprint $table) {
            $table->string('image')->nullable(false)->change();
        });
    }
};
