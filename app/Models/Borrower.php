<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class borrower extends Model
{
    use HasFactory;
    protected $guarded = [];


    /**
     * @return HasMany
     */
    public function borrowerIDs() : HasMany
    {
        return $this->hasMany(BorrowerID::class, 'borrower_id');
    }


    /**
     * @return HasMany
     */
    public function collaterals() : HasMany
    {
        return $this->hasMany(Collateral::class, 'borrower_id');
    }

    /**
     * @return HasMany
     */
    public function coMakers() : HasMany
    {
        return $this->hasMany(CoMaker::class, 'borrower_id');
    }

    /**
     * @return HasMany
     */
    public function references() : HasMany
    {
        return $this->hasMany(Reference::class, 'borrower_id');
    }
}
