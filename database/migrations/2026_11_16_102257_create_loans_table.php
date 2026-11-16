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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debtor_id')->references('id')->on('debtors');
            $table->string('type');//Monthly, Weekly, Daily
            $table->decimal('principal', 10, 2);
            $table->integer('terms');
            $table->float('interest_rate');// 5% the value should be 0.5
            $table->date('start_date');
            $table->string('status');// applied, active closed
            $table->date('release_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
