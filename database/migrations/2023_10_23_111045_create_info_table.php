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
        Schema::create('info', function (Blueprint $table) {
            $table->id();
            $table->string("fullname")->nullable();
            $table->string("email")->nullable();
            $table->string("password")->nullable();
            $table->integer("country")->nullable();
            $table->integer("state")->nullable();
            $table->integer("city")->nullable();
            $table->integer("socity")->nullable();
            $table->integer("phase")->nullable();
            $table->integer("block")->nullable();
            $table->integer("sub_block")->nullable();
            $table->string("country_name")->nullable();
            $table->string("state_name")->nullable();
            $table->string("city_name")->nullable();
            $table->string("socity_name")->nullable();
            $table->string("phase_name")->nullable();
            $table->string("block_name")->nullable();
            $table->string("sub_block_name")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info');
    }
};
