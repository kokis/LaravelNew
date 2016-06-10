<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['manufacturer_id', 'article', 'code', 'title', 'description'];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
