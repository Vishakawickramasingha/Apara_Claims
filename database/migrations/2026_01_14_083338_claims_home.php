<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->id();

            $table->string('claim_number')->unique();
            $table->string('loan_number');
            $table->string('bank_name');
            $table->string('borrower_name');

            $table->decimal('loan_amount', 15, 2);
            $table->decimal('claim_amount', 15, 2);

            $table->enum('status', [
                'Pending',
                'Approved',
                'Rejected',
                'Paid'
            ])->default('Pending');

            $table->date('claim_date');
            $table->text('remarks')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('claims');
    }
};
