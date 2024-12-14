<?php

namespace Database\Seeders;

use App\Models\setting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
 
        // User::factory(10)->create();
        //php artisan migrate 
        //php artisan db:seed 
        //php artisan serve 
        User::factory()->create([
            'name' => 'ali',
            'email' => 'ali@test.com',
            'password' => bcrypt('123456789'),
            'role' => '1'
        ]);

        // إدخال الإعدادات الافتراضية
        setting::create([
            'user_id' => 1, // افترض أن الأدمن لديه ID = 1
            'service' => '2:00 - 9:00 ',
            'email' => 'info@yourdomain.com',
            'phone1' => '+123456789',
            'phone2' => '+987654321',
            'location' => ' العراق - سليمانيه',
            'instagram' => 'https://instagram.com/youraccount',
            'facebook' => 'https://facebook.com/youraccount',
            'tiktok' => 'https://tiktok.com/@youraccount',
        ]);
    }
}
