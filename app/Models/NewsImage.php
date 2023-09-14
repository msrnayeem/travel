<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsImage extends Model
{
    public function news(){
        return $this->belongsTo(News::class);
    }
}
