<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Commande extends Model
{
    protected $fillable = ['total'];

    public function client()
    {
        
        return $this->hasOne('App\Client');
                    
    }

    public function products()
    {

        return $this->belongsToMany('App\Product')

            ->withPivot('product_count', 'product_catch_price');
                    
    }
}
 