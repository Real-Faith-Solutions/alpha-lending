<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Reference extends Model
{
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
