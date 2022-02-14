<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Venue;

class VenueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $venues = [
            [
                'name' => 'Basketball Hall',
                'slug' => 'basketball-hall',
                'price' => 150,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'name' => 'Billiard Venue',
                'slug' => 'billiard-venue',
                'price' => 150,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'name' => 'Golden Class Theater',
                'slug' => 'goldenclass-theather',
                'price' => 150,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'name' => 'Silver Class Theater',
                'slug' => 'silverclass-theater',
                'price' => 150,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        foreach ($venues as $key => $venue) {
            Venue::create($venue);
        }
    }
}
