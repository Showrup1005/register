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
        Schema::create('users_bonuses', function (Blueprint $table) {
            $table->id();
            $table->foreign('emp_id')->references('id')->on('users');
            $table->foreign('bonus_id')->references('bonus_id')->on('bonuses');
            $table->string('month');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_bonuses');
    }
};
