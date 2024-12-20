<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //        $this->call([
        //            UserSeeder::class,
        //            PostSeeder::class,
        //            CommentSeeder::class,
        //        ]);
        //  User::factory(10)->create();
        Role::create(['name' => 'patient']);
        Role::create(['name' => 'doctor']);
        Role::create(['name' => 'admin']);

        // $user = User::where('email','jawad@gmail.com')->first();
        $user = User::create([
            'email' => 'doctor@gmail.com',
            'name' => 'jawad',
            'password' => Hash::make('123456789')

        ]);

        $user1 = User::create([
            'email' => 'admin@gmail.com',
            'name' => 'jawad',
            'password' => Hash::make('123456789')

        ]);

        $user2 = User::create([
            'email' => 'patient@gmail.com',
            'name' => 'jawad',
            'password' => Hash::make('123456789')

        ]);
        $user->assignRole('doctor');
        $user1->assignRole('admin');
        $user2->assignRole('patient');
        //        User::factory()->create([
        //            'name' => 'Test User',
        //            'email' => 'test@example.com',
        //        ]);

        $this->call(SpecializationSeeder::class);
        $this->call(ClientTestSeeder::class);
    }
}
