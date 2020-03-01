<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 

use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole =Role::where('name','admin')->first();
        $adminRole =Role::where('name','advisor')->first();
        $adminRole =Role::where('name','user')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('Tumelo@230793')
        ]);

        $advisor = User::create([
            'name' => 'Advisor User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('Tumelo@230793')
        ]);

        $user = User::create([
            'name' => 'Student User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('Tumelo@230793')
        ]);

        $admin->roles()->attach($adminRole);
        $advisor->roles()->attach($advisorRole);
        $user->roles()->attach($userRole);
    }
}
