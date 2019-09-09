<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    // $table->string('complet_name');

    // $table->string('email')->unique();
    // $table->string('phone');
    // $table->text('adress');

    // $table->string('card_type');
    // $table->string('card_number');
    // $table->string('card_name');
    // $table->string('card_adress');
    // $table->string('card_country');
    // $table->string('cvv');
    // $table->string('exp_month');
    // $table->string('exp_year');
    protected $fillable = [
        'commande_id',
        'complet_name','email','phone','adress', 'card_type', 'card_number',
        'card_name', 'card_adress', 'card_country', 'cvv', 'exp_month', 'exp_year'

    ];

    public function command()
    {
        
        return $this->belongsTo('App\Commande');
                    
    }


}
