<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;



use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'rg@gmail.com')->first();

        if (!$user)
        {
            User::create([
                'name'      => 'rg',
                'email'     => 'rg@gmail.com',
                'role'      => 'admin',
                'password'  =>  Hash::make('password')
            ]);
        }

    }
}