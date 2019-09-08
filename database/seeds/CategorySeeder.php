<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Category::class, 50)->create()->each(function ($category) {
        //     $user->posts()->save(factory(Category::class)->make());
        // });

        Category::create(['name' => 'Uncategorized']);

        $categories = factory(Category::class, 3)->create();
    }
}
