<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('OverdueLoan', function (Blueprint $table) {
            $table->id();
            $table->string('loan_number');
            $table->string('bank_name');
            $table->string('borrower_name');
            $table->date('loan_due_date');
            $table->integer('overdue_days');
            $table->date('notification_date');
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('OverdueLoan');
    }
};
