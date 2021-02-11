<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('rooms')->delete();
        \DB::table('rooms')->insert([
            ['id' => 1, 'floor' => 1, 'type' => 'double','description' => 'text'],
            ['id' => 2, 'floor' => 1, 'type' => 'double','description' => 'text'],
            ['id' => 3, 'floor' => 1, 'type' => 'double','description' => 'text'],
            ['id' => 4, 'floor' => 2, 'type' => 'double','description' => 'text'],
            ['id' => 5, 'floor' => 2, 'type' => 'double','description' => 'text'],
            ['id' => 6, 'floor' => 2, 'type' => 'double','description' => 'text'],
            ['id' => 7, 'floor' => 3, 'type' => 'double','description' => 'text'],
            ['id' => 8, 'floor' => 3, 'type' => 'triple','description' => 'text'],
            ['id' => 9, 'floor' => 3, 'type' => 'triple','description' => 'text'],
            ['id' => 10, 'floor' => 4, 'type' => 'triple','description' => 'text'],

        ]);
    }
}
