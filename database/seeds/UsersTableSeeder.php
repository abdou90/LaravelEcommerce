<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->bigIncrements('id');
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->boolean('is_admin')->default(0);
        //     $table->rememberToken();
        //     $table->timestamps();

        User::create([
            'name' => 'Karim',
            'email' => 'ka@admin.com',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => bcrypt('123456789'),

        ]);


    }
}
