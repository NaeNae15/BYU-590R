<?php

namespace Database\Seeders;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\password;

class UserSeeder extends Seeder
{
    /**
     * run the database seeds
     * 
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'JaNae',
                'email' => 'weaverjanae@gmail.com',
                'email_verified_at' => null,
                'password' => bcrypt('jklolJKLOL'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        User::insert($users);
    }
}