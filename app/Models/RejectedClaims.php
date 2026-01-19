<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RejectedClaims extends Model
{
    use HasFactory;

       protected $fillable = [
       'Claim_ID',
       'Customer_Name',
       'Policy_No',  
       'claim_Type',
       'Amount',
       'Status',
       'Rejected Date',
       'Reason',
       'Action'
    ];
}
