<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Loan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Agents() : HasOne
    {
        return $this->hasOne(Agent::class,'id', 'agent_id');
    }

    public function Agent() : HasOne
    {
        return $this->hasOne(Agent::class,'id', 'agent_id');
    }

    public function Borrower() : HasOne
    {
        return $this->hasOne(Borrower::class,'id', 'borrower_id');
    }
}
