<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'service'
    ];

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
