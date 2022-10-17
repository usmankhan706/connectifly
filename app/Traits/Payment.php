<?php

namespace App\Traits;

use App\Models\Subscription;

/**
 *
 */
trait Payment
{
    public static function payment($end_at)
    {
        if (!auth('company')->user()->subscribed) {
            Subscription::create([
                'name' => "Premium",
                'plan' => "Premium",
                'owner_type' => 'Company',
                'owner_id' => auth('company')->user()->id,
                'cycle_started_at' => now(),
                'cycle_ends_at' => now()->addMonths($end_at),
            ]);
        } else {
            Subscription::where('owner_id', auth('company')->user()->id)->update([
                'cycle_started_at' => now(),
            ]);
        }
    }
}


