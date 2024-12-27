<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'avatar',
        'password',
        'username',
        'bio'
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
        'password' => 'hashed',
    ];

    public function status(){
        return $this->hasMany(Status::class)->latest() ;
    }

    public function coments() {
        return $this->hasMany(Coment::class)->latest() ;
    }

    public function followings(){
        return $this->belongsToMany(User::class,'follower_user','follower_id' , 'user_id')->withTimestamps();
    }


    public function followers(){
        return $this->belongsToMany(User::class,'follower_user','user_id' , 'follower_id')->withTimestamps();
    }

    public function follows(User $user){
        return $this->followings()->where('user_id' , $user->id)->exists();
    }

    public function likes(){
        return $this->belongsToMany(Status::class,'status_like')->withTimestamps();
    }

    public function likesIdea(Status $status){
        return $this->likes()->where('status_id',$status->id)->exists();
    }
}
