<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'content',
        'like'
    ];

    public function user(){
        return $this->belongsTo(User::class) ;
    }

    public function coments(){
        return $this->hasMany(Coment::class) ;
    }

    public function likes(){
        return $this->belongsToMany(User::class,'status_like')->withTimestamps();
    }
}
