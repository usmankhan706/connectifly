<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'plan',
        'owner_type',
        'owner_id',
        'next_plan',
        'quantity',
        'tax_percentage',
        'ends_at',
        'trial_ends_at',
        'cycle_started_at',
        'cycle_ends_at',
        'scheduled_order_item_id',
    ];


    public function owner()
    {
        return $this->belongsTo(Company::class, 'owner_id');
    }
}
