<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use Astrotomic\Translatable\Translatable;

class Category extends Model
{
    use Translatable;

    public $translatedAttributes = ['name'];
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
