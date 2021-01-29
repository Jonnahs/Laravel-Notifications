<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillabble = ['user_id', 'title', 'description'];
    
    public function commments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
        // return $this->belongsTo(User::class);
    }
}
