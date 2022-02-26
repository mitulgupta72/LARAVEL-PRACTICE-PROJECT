<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class membersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('members')->insert([
            'id'=>10,
            'name'=>Str::random(10),
            'email'=>Str::random(10)."@gmail.com",
            'address'=>Str::random(10),

        ]);
    }
}
