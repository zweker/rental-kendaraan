<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('bookings')->insert([
            ['name' => 'John Doe', 'email' => 'john.doe@example.com', 'booking_date' => '2024-08-01', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jane Smith', 'email' => 'jane.smith@example.com', 'booking_date' => '2024-08-02', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
