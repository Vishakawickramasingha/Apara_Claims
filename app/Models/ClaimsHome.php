<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimsHome extends Model
{
    use HasFactory;
      protected $fillable = [
        'claim_number',
        'loan_number',
        'bank_name',
        'borrower_name',
        'loan_amount',
        'claim_amount',
        'status',
        'claim_date',
        'remarks'
    ];
}
