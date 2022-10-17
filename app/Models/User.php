<?php

namespace App\Models;

use App\Models\Company;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'profile',
        'about',
        'cover',
        'title',
        'country',
        'city',
        'my_',
        'website',
        'company_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function my_company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function experience()
    {
        return $this->hasMany(Experience::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function requests()
    {
        return $this->hasMany(JobRequest::class);
    }

    public function conversation()
    {
        return $this->hasMany(Conversation::class);
    }

    public function following()
    {
        return $this->hasMany(Follower::class);
    }

    public function followed(my_ $my_)
    {
        return $this->following->contains("my__id", $my_->id);
    }

    public function chat()
    {
        return $this->hasManyThrough(Conversation::class, my_::class);
    }

    public function mollieCustomerFields() {
        return [
            'email' => $this->email,
            'name' => $this->first_name,
        ];
    }
    public function subscribed()
    {
        return $this->morphOne(Subscription::class, 'owner');
    }
}
