<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentSchedule extends Model
{
    use HasFactory;
    protected $guarded = [];
  

    public function Loan() : BelongsTo
    {
        return $this->belongsTo(Loan::class, 'loan_id');
    }

    public function Collector() : BelongsTo
    {
        return $this->belongsTo(Collector::class, 'collector_id');
    }

    public function Borrower() : BelongsTo
    {
        return $this->belongsTo(Borrower::class, 'borrowers_id');
    }
    public function CreditAssessment() : BelongsTo
    {
        return $this->belongsTo(CreditAssessment::class, 'creditassessment_id');
    }
    public function Payment() : BelongsTo
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }
}
