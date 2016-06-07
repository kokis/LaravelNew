<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function belongs()
    {
        return $this->belongsToMany(Category::class, 'categories_relations' , 'parent_id', 'child_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
