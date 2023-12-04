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
        Schema::table('categories', function (Blueprint $table) {
            //

            $table->mediumText('meta_description');
            $table->string('meta_title');
            $table->mediumText('meta_keywords');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            //
            $table->dropColumn('meta_description');
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_keywords');
        });
    }
};
