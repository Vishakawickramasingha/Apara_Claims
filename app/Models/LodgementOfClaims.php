<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LodgementOfClaim extends Model
{
    protected $fillable = [
        'claim_reference_no',
        'bank_fi_name',
        'cpa_guarantee_no',
        'guarantee_issued_date',
        'last_installment_paid_date',
        'claim_lodged_date',
        'default_reason',
        'claim_status'
    ];

    public function documents()
    {
        return $this->hasMany(LodgementClaimDocument::class);
    }
}
