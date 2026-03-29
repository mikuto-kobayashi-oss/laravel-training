<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OfficeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('offices')->insert([
            [
                'id' => 3,
                'name' => '物件３',
                'address' => 'seedビル',
                'post_code' => '6000001',
                'stair' => 1,
                'comment' => 'お問い合わせください',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'name' => '物件４',
                'address' => 'MySQLビル',
                'post_code' => '6000002',
                'stair' => 3,
                'comment' => 'お問い合わせください',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
