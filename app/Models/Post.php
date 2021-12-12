<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravelista\Comments\Commentable;

class Post extends Model
{
   
  use Commentable, HasFactory, SoftDeletes;
    protected $guarded =[];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
  
  }
