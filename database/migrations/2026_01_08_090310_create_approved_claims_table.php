<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approved_claims', function (Blueprint $table) {
            $table->id();
              $table->string('Claim_ID');
                     $table->string('Customer_Name');
                     $table->string('Policy_No'); 
                     $table->string('claim_Type');
                     $table->string('Claim_Amount');
                     $table->string('Status');
                     $table->string('Approved_Date');
                     $table->string('Action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approved_claims');
    }
};
