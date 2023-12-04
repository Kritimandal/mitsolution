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
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->default('Mit Solution');
            $table->string('site_logo');
            $table->string('logo_alt_text')->default('mitsolution logo');
            $table->string('site_location');
            $table->string('site_phone_number');
            $table->string('site_email');
            $table->mediumText('meta_description');
            $table->string('meta_title');
            $table->mediumText('meta_keywords');
            $table->string('facebook_link');
            $table->string('linkedin_link');
            $table->string('twitter_link');
            $table->string('instagram_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting');
    }
};
