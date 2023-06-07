<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'valid_id_number',
        'total_commissions',
        'total_released_commissions',
        'total_receivable_commissions',
        'total_referred_loans',
        'designated_area',
    ];

    public function Loans() : HasOne
    {
        return $this->hasOne(Loan::class,'agent_id');
    }
}
