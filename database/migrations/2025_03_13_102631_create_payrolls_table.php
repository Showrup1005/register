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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id('payroll_id');
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('id')->on('users');
            $table->foreign('salary_id')->references('salary_id')->on('salaries');
            $table->decimal('salary', 10, 2);
            $table->decimal('bonus', 10, 2);
            $table->decimal('deductions', 10, 2);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
