<?php

use Illuminate\Database\Seeder;
use App\{
    Category,
    Product
};
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $products = factory(Product::class, 50)->create();
    }
}
