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
        Schema::create('pending_claims', function (Blueprint $table) {
            $table->id();
              $table->string('Claim_ID');
                     $table->string('Customer_Name');
                     $table->string('Policy_No'); 
                     $table->string('claim_Type');
                     $table->string('Amount');
                     $table->string('Status');
                     $table->string('Submitted');
                     $table->string('Action');
                     $table->string('more_info_link');
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
        Schema::dropIfExists('pending_claims');
    }
};
