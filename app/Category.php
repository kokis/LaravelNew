<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title'];

    public function getRouteKeyName()
    {
        return 'title';
    }

    /**
     * Вложенные категории
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function children()
    {
        return $this
                ->belongsToMany(Category::class, 'categories_relations' , 'parent_id', 'child_id');
    }

    /**
     * Родительские категории
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function parents()
    {
        return $this
                ->belongsToMany(Category::class, 'categories_relations' , 'child_id', 'parent_id');
    }

    /**
     * Товары в категории
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    /**
     * Товары включая подкатегории
     */
    public function productsAll()
    {
        $products = $this->products;

        foreach($this->children as $subcategories) {
            $products = $products->merge($subcategories->productsAll());
        }

        return $products;
    }
}
