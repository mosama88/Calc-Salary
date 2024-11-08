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
        Schema::create('calc_net_salaries', function (Blueprint $table) {
            $table->id();
            $table->integer('number_of_month')->comment('عدد الشهور');
            $table->foreignId('currency_id')->references('id')->on('currencies');
            $table->decimal('salary_month',10,2)->comment('العملة بالمصرى');
            $table->decimal('total_salary_year',10,2)->comment('العملة بالمصرى');
            $table->decimal('monthly_expenses',10,2)->comment('المصاريف الشهرية');
            $table->decimal('annual_requirements',10,2)->comment('المتطلبات السنوية');
            $table->decimal('insurance_amount',10,2)->comment('مبلغ التأمينات');
            $table->decimal('net_salary',10,2)->comment('صافى المرتب');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calc_net_salaries');
    }
};
