<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function likeuser()
    {
        return $this->hasMany(likeMessage::class,'message_id')->where('user_id',\Auth::user()->id);
    }


}
