<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OverdueLoan extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'loan_number',
        'bank_name',
        'borrower_name',
        'loan_due_date',
        'overdue_days',
        'notification_date',
        'remarks'
    ];
}
