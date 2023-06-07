<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoMaker extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the product.
     *
     * @return BelongsTo
     */
    public function borrower(): BelongsTo
    {
        return $this->belongsTo(Borrower::class);
    }
}
