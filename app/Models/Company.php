<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Order\Contracts\ProvidesInvoiceInformation;

class Company extends Authenticatable
{
    use HasFactory,Notifiable; 


    protected $fillable=[
        "id",
        "name",
        "service_id",
        "email",
        "phone",
        "description",
        "size",
        "porfolio",
        "website",
        "country",
        "city",
        "logo",
        "cover",
        "password",
    ];

    protected $hidden = [
        'password'
    ];


    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'company_id');
    }

    public function requests()
    {
        return $this->hasManyThrough(JobRequest::class, Job::class);
    }

    public function conversation()
    {
        return $this->hasMany(Conversation::class);
    }

    public function follower()
    {
        return $this->hasMany(Follower::class);
    }

    public function followedBy(User $user){
        return $this->follower->contains('user_id', $user->id);
    }

    public function chat()
    {
        return $this->hasManyThrough(Conversation::class, User::class);
    }

    // public function subscribed()
    // {
    //     return $this->hasOne(FeaturedCompany::class);
    // }

    public function users()
    {
        return $this->hasMany(User::class, 'company_id');
    }

    public function mollieCustomerFields() {
        return [
            'email' => $this->email,
            'name' => $this->name,
        ];
    }

    public function subscribed()
    {
        return $this->hasOne(Subscription::class, 'owner_id');
    }
}
