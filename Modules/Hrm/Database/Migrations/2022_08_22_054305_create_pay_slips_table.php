<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('pay_slips'))
        {
            Schema::create('pay_slips', function (Blueprint $table) {
                $table->id();
                $table->integer('employee_id');
                $table->integer('net_payble');
                $table->string('salary_month');
                $table->integer('status');
                $table->integer('basic_salary');
                $table->text('allowance');
                $table->text('commission');
                $table->text('loan');
                $table->text('saturation_deduction');
                $table->text('other_payment');
                $table->text('overtime');
                $table->integer('workspace')->nullable();
                $table->integer('created_by');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pay_slips');
    }
};
