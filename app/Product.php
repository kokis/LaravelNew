<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
