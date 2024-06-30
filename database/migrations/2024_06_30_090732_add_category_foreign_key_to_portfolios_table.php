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
        Schema::table('portfolios', function (Blueprint $table) {
            //add category_id for portfolio
            $table->foreignId('category_id')->constrained('portfolio_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            //remove category_id for portfolio
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};
