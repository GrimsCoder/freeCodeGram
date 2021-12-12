<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
       
        $imagePath = ($this->image) ? $this->image : 'profile/ueKJduSNXHmZnLCqr6EOlRp98nJiyOiCQII7yMP7.jpg';
        return '/storage/' . $imagePath;
    }

    public function followers(){
        return $this->belongsToMany(USer::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
