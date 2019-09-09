<?php

namespace App;
use App\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use softDeletes;

    protected $dates = ['deleted_at'];


    protected $fillable = ['titre', 'photo', 'prix', 'description', 'category_id'];

    public function category(){

        return $this->belongsTo('App\Category');

    }

    public function commandes()
    {
        return $this->belongsToMany('App\Commande', 'commande_product')

            ->withPivot('product_count', 'product_catch_price' );
                    
    }

}
