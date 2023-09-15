<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function newsCategory(){
        return $this->belongsTo(NewsCategory::class);
    }

    public function newsImages(){
        return $this->hasMany(NewsImage::class);
    }
}
