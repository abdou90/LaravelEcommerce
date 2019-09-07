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

    public function commandes(){
        return $this->belongsToMany('App\Commande');
    }
}
