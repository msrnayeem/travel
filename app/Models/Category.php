<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function packages()
    {
        return $this->hasMany(Package::class);
    }

}
