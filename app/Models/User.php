<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'api_key',
        'chunk_blast'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function numbers(){
        return $this->hasMany(Number::class);
    }
    public function autoreplies(){
        return $this->hasMany(Autoreply::class);
    }
    public function contacts(){
        return $this->hasMany(Contact::class);
    }
    public function tags(){
        return $this->hasMany(Tag::class);
    }
    public function blasts(){
        return $this->hasMany(Blast::class);
    }
    public function campaigns(){
        return $this->hasMany(Campaign::class);
    }

    // get expired subscription
    public function getExpiredSubscriptionAttribute(){
        if($this->active_subscription == 'inactive'){
            return 'You not have subscription';
        } else if($this->active_subscription == 'lifetime'){
            return 'You have lifetime subscription';
        } else if($this->active_subscription == 'active'){
            $expired_date = $this->subscription_expired;
            $expired_date = strtotime($expired_date);
            $current_date = strtotime(date('Y-m-d'));
            if($expired_date < $current_date){
                return 'Your subscription expired';
            } else {
                // count days
                $days = $expired_date - $current_date;
                $days = $days / (60 * 60 * 24);
                $days = round($days);
                return 'Your subscription will expire in '.$days.' days';
            }
        }  
    }

    // get booliean expired subscription
    public function getIsExpiredSubscriptionAttribute(){
        if($this->active_subscription == 'inactive'){
            return true;
        } else if($this->active_subscription == 'lifetime'){
            return false;
        } else if($this->active_subscription == 'active'){
            $expired_date = $this->subscription_expired;
            $expired_date = strtotime($expired_date);
            $current_date = strtotime(date('Y-m-d'));
            if($expired_date < $current_date){
                return true;
            } else {
                return false;
            }
        }  
    }

    // get total device connect and disconnect
    public function getTotalDeviceAttribute(){
       $connectedDevice = Number::whereUserId($this->id)->whereStatus('Connected')->count();
         $disconnectedDevice = Number::whereUserId($this->id)->whereStatus('Disconnected')->count();
         return 'Connected: '.$connectedDevice.', Disconnected: '.$disconnectedDevice;
    }
}
