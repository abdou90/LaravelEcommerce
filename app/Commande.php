<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Commande extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class, 'commande_product')
            ->as('commandeProduct')
            ->withPivot('product_id', 'commande_id', 'quantite', 'created_at', 'updated_at');
                    
    }
}
 