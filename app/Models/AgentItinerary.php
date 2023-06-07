<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentItinerary extends Model
{
    use HasFactory;
    protected $fillable = [
        'borrower',
        'contact_numbers',
        'maturity_date',
        'outstanding_balance',
        'penalty_balance',
        'weekly_payment',
        'short_over',
        'amount_paid',
    ];
}
