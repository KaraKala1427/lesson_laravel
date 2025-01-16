<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['askar', 'ggg', 'yernar', 'sunkar', 'damir', 'roma', 'polina'];

        $cities = ['almaty', 'kokshetau', 'kostanay', 'shymmkent', 'taraz', 'karaganda', 'oral'];

        for ($i = 0; $i < 100; $i++) {
            DB::table('users')->insert([
                'name' => $names[rand(0,6)],
                'age' => rand(10, 45),
                'city' => $cities[rand(0,6)],
            ]);
        }
    }
}
