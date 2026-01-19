<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LodgementClaimDocument extends Model
{
    protected $fillable = [
        'lodgement_claim_id',
        'document_type',
        'file_path'
    ];
}
