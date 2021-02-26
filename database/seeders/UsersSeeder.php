<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // a user who has an admin role
        $user = User::create([
            'name' => 'Admin MediaENT',
            'email' => 'admin@mediaent.com',
            'password' => bcrypt('secret12345')
        ]);
        $user->assignRole('admin');

        // a user who has an author role
        $user = User::create([
            'name' => 'Author Example',
            'email' => 'author@mediaent.com',
            'password' => bcrypt('secret12345')
        ]);
        $user->assignRole('user', 'author');

        // a user who has an user role
        $user = User::create([
            'name' => 'User Example',
            'email' => 'user@mediaent.com',
            'password' => bcrypt('secret12345')
        ]);
        $user->assignRole('user');
    }
}
