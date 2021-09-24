<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'お弁当',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'サラダ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '麺類',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
