<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('lodgement_of_claims', function (Blueprint $table) {
            $table->id();
            $table->string('claim_reference_no')->unique();
            $table->string('bank_fi_name');
            $table->string('cpa_guarantee_no');
            $table->date('guarantee_issued_date');
            $table->date('last_installment_paid_date');
            $table->date('claim_lodged_date');
            $table->text('default_reason')->nullable();
            $table->enum('claim_status', [
                'Submitted',
                'Under Review',
                'Additional Documents Requested',
                'Approved',
                'Rejected'
            ])->default('Submitted');
            $table->timestamps();
        });

        Schema::create('lodgement_claim_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lodgement_claim_id')
                  ->constrained('lodgement_of_claims')
                  ->onDelete('cascade');
            $table->string('document_type');
            $table->string('file_path');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lodgement_claim_documents');
        Schema::dropIfExists('lodgement_of_claims');
    }
};
