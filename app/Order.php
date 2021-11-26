<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Client;

class Order extends Model
{
    protected $guarded = [];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_order')->withPivot('quantity');
    }
}
