<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collector extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'valid_id_number',
        'designated_area',
        'total_loans_handled',
        'total_handled_active_loans',
        'total_handled_matured_loans',
        'total_ontime_collected',
        'total_delayed_collected',
    ];
}
