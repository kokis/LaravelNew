<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title'];

    /**
     * Вложенные категории
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function children()
    {
        return $this
                ->belongsToMany(Category::class, 'categories_relations' , 'parent_id', 'child_id')
                ->withTimestamps();
    }

    /**
     * Родительские категории
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function parents()
    {
        return $this
                ->belongsToMany(Category::class, 'categories_relations' , 'child_id', 'parent_id')
                ->withTimestamps();
    }
    
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
